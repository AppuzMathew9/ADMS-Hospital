# Software Requirements Specification (SRS)
## Project: ADMS Hospital Management System

### 1. Introduction
The ADMS Hospital Management System is an integrated platform designed to digitize and automate hospital workflows. It aims to improve patient care through AI-driven insights and efficient resource management.

### 2. Functional Requirements

#### 2.1 Patient Management
- **Registration**: Capture patient demographics and contact details.
- **EHR**: Maintain a digital history of patient visits, diagnoses, and prescriptions.
- **Triage**: Categorize emergency patients based on severity.

#### 2.2 Clinical Modules
- **Doctor Dashboard**: Manage daily appointments and patient notes.
- **Nursing Station**: Track medication administration and vitals.
- **Pharmacy**: Inventory management and prescription fulfillment.

#### 2.3 AI Services
- **Drug Interaction Checker**: Analyze potential risks between multiple prescribed drugs.
- **Symptom Analyzer**: Provide preliminary diagnostic suggestions.
- **Resource Optimizer**: Predict bed occupancy and staff requirements.

#### 2.4 Administrative Modules
- **HR & Payroll**: Manage staff records, shifts, and salary disbursements.
- **Billing**: Generate invoices for consultations, lab tests, and room stays.

### 3. Non-Functional Requirements
- **Security**: Role-based access control (RBAC) to ensure data privacy.
- **Performance**: Sub-second response times for clinical dashboards.
- **Scalability**: Support for multiple hospital departments and high patient volume.

### 4. Technical Stack
- **Web**: PHP 8.1+
- **AI**: Python 3.10+
- **Database**: MySQL 8.0
- **Integrations**: Google Gemini API, Firebase Cloud Messaging (FCM).

### 5. System Architecture
The system follows a modular architecture where the PHP backend handles core business logic and UI, while a Python-based microservice handles AI computations.
