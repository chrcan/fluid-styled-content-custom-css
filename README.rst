===================================================
TYPO3 Extension CSS fields for Fluid Styled Content
===================================================

This extension adds some custom CSS fields to content elements of Fluid Styled
Content.

:Repository:  https://github.com/chrcan/fluid-styled-content-custom-css
:Read online: https://docs.typo3.org/p/rcdesign/fluid-styled-content-custom-css/main/en-us/

**Installation and Usage Guide**

*Installation*

To install the extension, run the following command:


```composer require rcdesign/fluid-styled-content-custom-css```

Once installed, the extension is ready to use without any additional setup.

*Usage*

1. Access the Custom CSS Field

-   In the TYPO3 backend, navigate to the Appearance tab of a content element.
-   You will find a new field named Custom CSS.

2. Define a Custom CSS Class

-   Enter your desired CSS class name into the Custom CSS field.
-   By default, the class rc-animation is set.
-   If needed, you can override it with your own class to apply custom styles.

3. Custom Styling

-   The extension comes with a predefined pulse animation applied to rc-animation.
-   If this effect does not suit your needs, you can create your own CSS rules.
-   Ensure that the custom class is correctly added to the Custom CSS field in TYPO3.

4. Important Notes

-   If no custom class is defined, the default rc-animation class will be used.
-   To apply custom styles, make sure your CSS file is correctly included in your TYPO3 template.
-   Always double-check that the class name entered in the Custom CSS field matches your CSS definition.

*Now you can easily enhance your content elements with custom styling!*
