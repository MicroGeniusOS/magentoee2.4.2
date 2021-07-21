# Default shipping and billing address for company user account for Magento 2

Here we are creating a module to display company address as default shipping and default billing address for all company’s users on checkout page.

On checkout page every user of the company will see all the comapny address as  shipping  address  on the account. 

There is no need to create any addredd in address book of the user’s account.

## Tecnical Specifications ##
On checkout page display company address as a shipping address for company user.
Logged in customer’s address is getting from DefaultConfigProvider i.e. Magento\Checkout\Model\DefaultConfigProvider class. overwrite it in Tribugs/CompanuAddress custom module.

## For quote address validation to place order. ##
overwrite to the class \Magento\Quote\Model\QuoteAddressValidator.

## For Customer validation to place order. ##
overwrite to the class \Magento\Customer\Model\Address\Validator\Customer.