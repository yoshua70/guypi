@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap');

*,
*::before,
*::after {
  box-sizing: border-box;
}

:root {
  --color-bg: #eef0f1;
  --color-text: #08090a;
  --color-blue: #3b49df;
  --color-red: #df3b3b;
  --color-green: #3bdf72;
  --color-gray: #b5bdc4;
  --select-border: #777;
  --select-focus: blue;
  --select-arrow: var(--select-border);
}
html,
body {
  padding: 0;
  margin: 0;
  font-family: 'Noto Sans', sans-serif;
  background-color: var(--color-bg);
  color: var(--color-text);
  margin-top: 50px;
}



main {
  padding: 1rem 10vw;
}

h1 { font-size: 2rem; }
h2 { font-size: 1.5rem; }
h2 { font-size: 1.25rem; }

a {
  color: inherit;
  text-decoration: none;
  cursor: pointer;
}

* {
  box-sizing: border-box;
}

img {max-width: 100%;}

input { 
  display: inline-block; 
  outline: none;
  border: none;
  font-size: 1.5rem;
  width: 100%;
  padding: 5px 10px;
}

input[type="submit"] {
  background: transparent;
  color: #ffffff;
  cursor: pointer;
}

select {
  // A reset of styles, including removing the default dropdown arrow
  appearance: none;
  // Additional resets for further consistency
  background-color: transparent;
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 100%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
  outline: none;
}

.select {
  width: 100%;
  min-width: 15ch;
  max-width: 30ch;
  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.25em 0.5em;
  font-size: 1.25rem;
  cursor: pointer;
  line-height: 1.1;
  background-color: #fff;
  background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
  position: relative;
}

select:focus + .focus {
  position: absolute;
  top: -1px;
  left: -1px;
  right: -1px;
  bottom: -1px;
  border: 2px solid var(--select-focus);
  border-radius: inherit;
}

fieldset {
  border: none;
  padding: 1rem 0;
  font-size: 1.25rem;
}

code {
  overflow-x: scroll;
}

/* Navbar */

.navbar {
  height: 70px;
  width: 100%;
  background: white;
  color: var(--colors-text);
  position: fixed;
  top: 0;
  padding: 0 10vw;
  font-weight: bold;
  z-index: 99;
  box-shadow: 0px 5px 8px #888888;
}

.navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 100%;
}

.navbar img {
  border-radius: 50%;
  width: 50px;
  height: 50px;
  cursor: pointer;
}

.navbar li {
  border-radius: 50%;
  
}

.nav_title {
  color: crimson;
  font-size: 2rem;
}

/* Buttons */

.btn, button {
  background-color: var(--color-gray);
  border: none;
  color: var(--color-text);
  padding: 1rem 2rem;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  text-decoration: none;
  font-family: 'Noto Sans', sans-serif;
  font-weight: bold;
  border-radius: 0.25rem;
  cursor: pointer;
  margin: 0.5rem 1rem 0.5rem 0;
}

@media only screen and (max-width: 768px) {
  button {
    padding: 0.5rem 1rem;
    font-size: 0.8rem;
  }
}


button:hover {
  filter: brightness(90%);
}

button:disabled,
button[disabled]{
  filter: brightness(80%);
  cursor: not-allowed;
}

button.btn-blue {
  background-color: var(--color-blue);
  color: white;
}

button.btn-red {
  background-color: var(--color-red);
  color: white;
}

button.btn-green {
  background-color: var(--color-green);
  color: white;
}

button.btn-google {
  background-color: white;
  color: var(--color-text);
}

.btn-google img {
  width: 30px;
  margin-right: 10px;
}

button.btn-logo {
  background-color: var(--color-text);
  color: white;
  text-transform: uppercase;
  font-size: 1.5rem;
  padding: 0.5rem 1rem;
}

/* Cards */

.card {
  padding: 2rem;
  margin: 1rem 0;
  background-color: white;
  border: 1px solid var(--color-gray);
  border-radius: 8px;
}

.card footer {
  display: flex;
}

.card-img-center {
  width:20%;
  display:block;
  margin:auto;
  border-radius: 50%;
  max-width: 150px;
}

.card-info {
  color: white;
  background: var(--color-blue);
}

/* Table */
table {
  border: none;
  box-shadow: 0px 5px 8px #888888;
}

th {
  background-color: teal;
}

td {
  width:150px;
}

td, th {
  border: none;
  padding: 0.5rem;
  color: black;
  font-weight: bold;
}

/* Loader */

.loader {
  border: 10px solid var(--color-bg); 
  border-top: 10px solid var(--color-blue); 
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* File uploads */

input[type="file"] {
  display: none;
}

.upload-snippet {
  width: 75%;
    margin-left: auto;
    background: white;
    padding: 5px;
    margin: 5px 0;
}
/* Utilities */

.push-left {
  margin-left: auto;
}

.text-sm {
  font-size: 0.85rem;
}

.text-danger {
  font-weight: bold;
  color: var(--color-red);
}

.text-success {
  font-weight: bold;
  color: var(--color-green);
}

.text-info {
  font-weight: bold;
  color: var(--color-blue);
}

.box {
  display: flex;
  justify-content: space-between;
}

.box-center {
  display: flex;
  flex-direction: column;
  align-content: center;
  text-align: center;
}

.hidden { display:  none; }