/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
/* global Base64 */
define([
    'jquery',
    'Magento_Ui/js/form/element/file-uploader'
], function ($, Element) {
    'use strict';

    return Element.extend({

        /**
         * Handler of the file upload complete event.
         *
         * @param {Event} e
         * @param {Object} data
         */
        onFileUploaded: function (e, data) {
            var textInput = $('input[name="' + e.target.name + '_uploaded"]'),
                filePath = data.result.file;

            this._super(e, data);
            textInput.val(filePath);
        },

        /**
         * Returns path to the files' preview image.
         *
         * @param {Object} file
         * @returns {String}
         */
        getFilePreview: function (file) {
            file.url = file.url.replace('/customer/', '/customer_custom_attributes/');

            return file.url;
        },

        /**
         * May perform modifications on the provided
         * file object before adding it to the files list.
         *
         * @param {Object} file
         * @returns {Object} Modified file object.
         */
        processFile: function (file) {
            if (file.error !== undefined) {
                file.previewType = 'document';
            } else {
                file.previewType = this.getFilePreviewType(file);
            }

            if (!file.id && file.name) {
                file.id = Base64.mageEncode(file.name);
            }

            this.observe.call(file, true, [
                'previewWidth',
                'previewHeight'
            ]);

            return file;
        },

        /**
         * Removes provided file from thes files list.
         *
         * @param {Object} file
         * @returns {FileUploader} Chainable.
         */
        removeFile: function (file) {
            var deleteAttributeValue = $('input[name="delete_attribute_value"]').val();

            if (!this.validation.required) {
                if (deleteAttributeValue === '') {
                    $('input[name="delete_attribute_value"]').val(deleteAttributeValue + this.name);
                } else {
                    $('input[name="delete_attribute_value"]').val(deleteAttributeValue + ',' + this.name);
                }
            }

            this.value.remove(file);

            return this;
        }
    });
});
