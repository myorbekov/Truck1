# Global Haul Website

This is a simple, single-page website for the logistics company "Global Haul".

## Project Structure

The project has been refactored to separate concerns, making it more modular and easier to maintain.

- `index.php`: The main entry point of the application. It includes the header and footer, and displays the main content of the page.
- `header.php`: Contains the top part of the HTML document, including the `<head>` section, navigation, and the application modal.
- `footer.php`: Contains the bottom part of the HTML document, including the footer and script includes.
- `form_handler.php`: Handles the form submission logic. It validates the input, saves the data to `data.txt`, and redirects the user back to the main page.
- `script.js`: Contains the JavaScript code for the website's interactivity, such as the modal, FAQ toggles, and mobile menu.
- `style.css`: Contains custom CSS styles for the website.
- `data.txt`: A text file where the submitted form data is stored.

## How to Run

1.  Make sure you have a PHP server environment (like XAMPP, WAMP, or MAMP) set up.
2.  Place the project files in the web root of your server.
3.  Open the `index.php` file in your browser.