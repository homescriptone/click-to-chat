# Click to Chat Add-on for Statamic

The Click to Chat Add-on for Statamic is an add-on that allows website owners to add a **"Click to Chat"** button on their website. This button enables customers to quickly and easily communicate with the website owner on WhatsApp, without having to manually save their phone number or open WhatsApp themselves.

## Features

- Easy integration with WhatsApp API.
- Customizable button styles and text.
- Cross-browser compatibility.
- Lightweight and fast loading.

### Use Cases

- Small businesses that want to provide a more personal customer experience by enabling them to chat directly with a representative on WhatsApp.
- E-commerce websites that want to streamline their customer support by allowing customers to easily communicate about their orders through WhatsApp.
- Service providers, such as consultants or freelancers, who want to make it easy for potential clients to get in touch with them and discuss their needs.
- Any website that wants to improve engagement with its audience by providing an easy way for visitors to contact them via WhatsApp.

### Requirements

- Statamic v3 or higher
- PHP v7.4 or higher

### Installation

You should install via the Statamic Marketplace at <https://statamic.com/addons/homescriptone/click-to-chat> or you can use composer in your project root:

> composer require homescriptone/click-to-chat

### Configuration

To configure the widget, access the Control Panel and head to the Click To Chat menu in the dashboard. From there, you can customize:

- The default phone number your customers will talk to
- The default message you will receive in your account when the communication is engaged
- Whether the widget will be displayed or not
- The position of the widget on the website

Once you have configured the settings in the Control Panel, make sure to add the tag to any of the layouts of your website. The tag to use is:

> {{click_to_chat}}

### Support

If you encounter any issues with the add-on or have any questions, please don't hesitate to contact our support team [here](https://homescriptone.freshdesk.com/support/home).

## Developers

[Manu The Blacker](https://github.com/manutheblacker)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

See our [contributing guide](CONTRIBUTING.md) for more information.

### License

This is open-source software, feel free to fork it and improve it.
