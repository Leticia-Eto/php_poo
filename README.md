# php_poo
# 🛒 PHP Product Management

This project, **php_poo**, demonstrates the implementation of an object-oriented PHP system for managing products. It includes a form in `index.php` that sends user-inputted data to a PHP script, which then processes and displays product information.

## 🚀 Features

- 📝 Product registration with name, brand, quantity, and price
- 📩 Form submission via POST method
- 🔍 Display of submitted product details
- 🛠 Object-oriented PHP structure with encapsulation

## 🛠️ Technologies Used

- PHP
- HTML
- CSS (Basic Styling)

## 📜 Code Overview

The `Produto` class contains private attributes:
- `$nome` (name)
- `$marca` (brand)
- `$qtd` (quantity)
- `$preco` (price)

It also includes:
- A constructor to initialize product details
- Getter and setter methods for each attribute with type safety

## 📌 Usage

### 1. Clone the Repository
```bash
git clone https://github.com/Leticia-Eto/php_poo.git
cd php_poo
```

### 2. Run the Project
- Use a local server (such as XAMPP, WAMP, or a built-in PHP server) to execute the script.
```bash
php -S localhost:8000
```
- Open `http://localhost:8000/index.php` in your browser.

### 3. Expected Behavior
- A form will appear for entering product details.
- Upon submission, the data is processed and displayed in a structured format.

### 4. Example Output
```bash
Nome: Camiseta
Marca: Nike
Quantidade: 5
Preço: 99.9
```

## 📌 Contribution
Feel free to contribute by submitting issues or pull requests. 🚀

## 📜 License
This project is open-source and available under the MIT License.

---

Made with by Leticia-Eto.
