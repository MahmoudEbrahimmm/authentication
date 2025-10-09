Authentication Public API

This project is a fully customized authentication system built from scratch using Laravel, without relying on any external authentication libraries.
It provides complete control over user registration, login, email verification, password reset, and account confirmation — making it a flexible and educational foundation for secure web applications.

Project Overview

The Authentication Public API offers a secure and efficient way to manage user accounts.
It is designed with a focus on simplicity, security, and extendability, allowing developers to easily integrate it into any Laravel-based application.

The system includes all essential authentication operations with full API endpoints and JSON responses.

Key Features

User Registration
Allows new users to sign up with name, email, and password.
The system automatically sends a verification email upon registration.

Email Verification
Users must verify their email address before accessing protected routes.
A unique token is generated and sent to the user’s email for verification.

Login System
Authenticates users using email and password.
Returns a secure API token (or session) upon successful login.

Password Reset
Includes a secure process for resetting a forgotten password.
Users receive a password reset link by email and can create a new password safely.

Account Confirmation
Confirms the user’s account after successful verification.
Unverified users are restricted from accessing protected areas.

Logout Functionality
Securely invalidates the user session or token, ensuring complete logout.

Profile Management (Optional)
Allows users to update their name, email, or password after authentication.

Security Highlights

Tokens are securely generated and validated.

Email verification prevents unauthorized access.

Passwords are encrypted using Laravel’s hashing system.

Access to sensitive routes is protected using middleware.

No external authentication packages — 100% custom-built logic.

API Endpoints

POST /api/register – Create a new account and send a verification email.

GET /api/verify/{token} – Verify user’s email address.

POST /api/login – Authenticate user credentials.

POST /api/logout – Log out the user and revoke access token.

POST /api/password/forgot – Request password reset link.

POST /api/password/reset – Reset password using provided token.

GET /api/user – Get the authenticated user’s profile (protected route).

Response Format

All API responses return in a clear JSON structure containing:

Message (operation description)

Status code (success or error)

Data or null

This makes it easy to handle responses in frontend or mobile applications.

Technologies Used

Laravel Framework

PHP

MySQL Database

RESTful API Design

Mailer for sending verification and reset emails

Middleware for route protection

Validation and Encryption for user security

Purpose

The Authentication Public API is ideal for developers who want to understand authentication logic deeply and build secure systems without depending on pre-made Laravel authentication packages.
It can serve as the foundation for any user-based platform such as dashboards, e-commerce systems, or learning platforms.

Developer

Developed by Mahmoud Ebrahim
Backend Developer specializing in Laravel, RESTful APIs, and secure authentication systems.
