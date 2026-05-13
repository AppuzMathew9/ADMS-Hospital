# ADMS - Advanced Hospital Management System

ADMS (Advanced Digital Management System) is a comprehensive Hospital Management System designed to streamline clinical, administrative, and financial operations. It features a robust PHP backend, an integrated AI engine for clinical insights, and a dynamic dashboard for real-time monitoring.

## Features

- **Clinical Management**: Electronic Health Records (EHR), Visit Notes, and Patient Timelines.
- **AI Integration**: Gemini-powered drug interaction checker, symptom analysis, and triage optimization.
- **Administrative Suite**: HR & Payroll, Nursing Station management, and Ward/Bed analytics.
- **Diagnostics**: Laboratory and Radiology order management with result tracking.
- **Patient Portal**: Online appointment scheduling and telemedicine support.
- **Emergency Dashboard**: Real-time triage and emergency response coordination.

## Tech Stack

- **Frontend**: HTML5, CSS3 (Vanilla), JavaScript.
- **Backend**: PHP 8.x, Composer.
- **AI Engine**: Python 3.x (Flask/FastAPI), Google Gemini AI.
- **Database**: MySQL/MariaDB.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/AppuzMathew9/ADMS-Hospital.git
   ```
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Set up the Python AI server:
   ```bash
   cd ai
   pip install -r requirements.txt
   python app.py
   ```
4. Configure your database in `includes/db_config.php`.
5. Start your web server (Apache/Nginx).

## License

MIT License
