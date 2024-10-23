# DentalClinicSystem
 
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: linear-gradient(to right, #00c6ff, #0072ff);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    width: 300px;
    text-align: center;
}

.login-form h2 {
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    font-size: 14px;
    margin-bottom: 5px;
    color: #555;
}

.input-group input {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
    font-size: 14px;
}

.remember-me {
    display: flex;
    align-items: center;
}

.remember-me input {
    margin-right: 5px;
}

.login-button {
    width: 100%;
    padding: 10px;
    background-color: #0072ff;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

.login-button:hover {
    background-color: #005bb5;
}

.forgot-password {
    margin-top: 10px;
    font-size: 12px;
}

.forgot-password a {
    color: #0072ff;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}
