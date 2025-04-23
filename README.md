# MediCare Web Application

MediCare is a user-friendly web platform designed to simplify healthcare access. Our system allows users to easily register, upload prescriptions, and have medications delivered directly to their homes. The platform offers a variety of healthcare products, including prescription medications, pain relief, skincare, haircare, and sanitary products, making it easy for users to prioritize their well-being.

## Features
- **User Registration & Account Creation**: Users can create their own accounts and securely manage their profiles.
- **Prescription Upload**: Customers can upload their prescriptions to the platform for verification.
- **Medication Delivery**: After verifying prescriptions, medications are delivered to users' homes.
- **Product Catalog**: Users can browse a wide range of healthcare products including Panadol, skincare, and haircare essentials.

## Features Implemented by Layara
This project’s part, under the "Layara" folder, includes the implementation of the **"Customer Buying Medicine Using the Upload Prescription Feature"**. This is a key feature of the MediCare web application, allowing customers to purchase medications based on their uploaded prescriptions.

Static pages : Privacy Policy page, Terms and Conditions page

### Key Functionalities:
- **Upload Prescription**: Customers can upload their prescription files to the system.
- **Prescription Verification**: The uploaded prescriptions are verified before the customer can proceed with buying the medication.
- **CRUD Operations**: 
    - **Create**: Upload and create prescription records.
    - **Read**: View and verify uploaded prescriptions.
    - **Update**: Update prescription details after verification.
    - **Delete**: Delete prescriptions if necessary (e.g., for invalid or expired prescriptions).

## Tech Stack
- **Frontend**: 
    - HTML
    - CSS
    - JavaScript
- **Backend**: 
    - PHP
- **Database**: 
    - MySQL
- **Environment**: 
    - Localhost (XAMPP or similar setup)

## Setup Instructions
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/layara-S/MediCare.git

## Setup Instructions

### Set Up Local Server:
- Make sure you have XAMPP or another local server setup.
- Place the project folder in the `htdocs` directory (or equivalent) of your local server.

### Set Up Database:
- Create a MySQL database called `mediCare_db`.
- Import the provided SQL file to set up the required tables for the project.

### Run the Application:
- Open the project folder in your browser by navigating to `http://localhost/your_project_folder_name`.
