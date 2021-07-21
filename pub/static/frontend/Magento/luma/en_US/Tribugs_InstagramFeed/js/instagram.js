define([
    "jquery",
    "Tribugs_InstagramFeed/js/lib/shuffle.min",
    "Tribugs_InstagramFeed/js/lib/imagesloaded.pkgd.min",
    "mageplaza/core/jquery/popup"
], function ($, Shuffle) {
    "use strict";
    $.widget("tribugs.instagram", {
        options: {
            id: "",
            token: "",
            count: "",
            sort: "",
            image_resolution: "",
            layout: "",
            show_like_comment: 0,
            show_popup: 0
        },
        _create: function () {
            this._ajaxSubmit();
        },

        showPopup: function (id) {
            $(id).magnificPopup({
                delegate: ".mpinstagramfeed-photo a",
                type: "image",
                gallery: {enabled: true},
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: "mfp-no-margins mfp-with-zoom", // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300 // don't forget to change the duration also in CSS
                }
            });
        },

        _ajaxSubmit: function () {
            var self = this,
                id = "#mpinstagramfeed-photos-" + this.options.id,
                captionHtml = this.options.show_caption === '1' ? '<div class="mpinstagramfeed-post-caption">{{caption}}</div>' : '',
                photo_Template = '<div class="mpinstagramfeed-photo">' +
                '<a class="mpinstagramfeed-post-url " href="{{link}}" target="_blank">' +
                    captionHtml +
                '<img class="mpinstagramfeed-image" src="{{imgSrc}}" alt="">' +
                '</a></div>';

                var video_Template = '<div class="mpinstagramfeed-video">' +
                '<a class="mpinstagramfeed-post-url " href="{{link}}" target="_blank">' +
                    captionHtml +
                '<video controls autoplay>'+
                  '<source id="mp4_src" src="{{vdoSrc}}" type="video/mp4">'+                  
                '</video>' +
                '</a></div>';
            $.ajax({
                url: "https://graph.instagram.com/me/media",
                data: {
                    access_token: this.options.token,
                    fields: 'id, caption, media_type, media_url, permalink, username, children{media_url,thumbnail_url,permalink}'
                },
                dataType: "json",
                type: "GET",
                success: function (data) {
                    var Image_url, video_url, item_Link,
                        items = data.data,
                        count = 0;
                    $.each(items, function (index, item) {
                        if (count >= parseInt(self.options.count)) {
                            return false;
                        }
                        if (item.media_type === 'VIDEO') {
                            // console.log(item.media_url);
                            video_url = item.media_url;
                            if (self.options.show_popup === "1") {
                                item_Link = video_url;
                            } else {
                                item_Link = item.permalink;
                            }
                            var video_Temp = video_Template
                            .replace("{{link}}", item_Link)
                            .replace("{{caption}}", item.caption ? item.caption : '')
                            .replace("{{vdoSrc}}", video_url);

                            $(id).append(video_Temp);
                        }else if(item.media_type == 'IMAGE'){

                            Image_url = item.media_url;
                            if (self.options.show_popup === "1") {
                                item_Link = Image_url;
                            } else {
                                item_Link = item.permalink;
                            }

                            var photo_Temp = photo_Template
                            .replace("{{link}}", item_Link)
                            .replace("{{caption}}", item.caption ? item.caption : '')
                            .replace("{{imgSrc}}", Image_url);

                            $(id).append(photo_Temp);
                        }else if(item.media_type === 'CAROUSEL_ALBUM'){
                            var multipleItems = item.children.data,
                            count2 = 0;
                            $.each(multipleItems, function (index, multipleImages) {
                                console.log(multipleImages.media_url);
                                Image_url = multipleImages.media_url;
                                if (self.options.show_popup === "1") {
                                    item_Link = Image_url;
                                } else {
                                    item_Link = multipleImages.permalink;
                                }
                                var photo_Temp2 = photo_Template
                                .replace("{{link}}", item_Link)
                                .replace("{{caption}}", multipleImages.caption ? multipleImages.caption : '')
                                .replace("{{imgSrc}}", Image_url);

                                $(id).append(photo_Temp2);
                                 count2++;
                            });
                        }
                        if(item.media_type === 'CAROUSEL_ALBUM'){
                            count = count + count2;
                        }else{
                            count++;
                        }
                    });
                },
                complete: function (data) {
                    // use shuffle after load images
                    if (self.options.layout === "optimized") {
                        self.demo(id);
                    }
                    if (self.options.show_popup === "1") {
                        self.showPopup(id);
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        },

        demo: function (id) {
            var element = document.querySelector(id);
            $(element).imagesLoaded().done(function (instance) {
                this.shuffle = new Shuffle(element, {
                    itemSelector: '.mpinstagramfeed-photo'
                });
            });
        }
    });

    return $.tribugs.instagram;
});
