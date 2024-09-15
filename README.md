# Google Drive File Access via Service Account - PHP Script

This script allows users to log in with their Google account and access a specific Google Drive file via a service account. It uses the `google/apiclient` PHP library for OAuth 2.0 authentication and accessing the Google Drive API.

## Prerequisites

1. **PHP**: Ensure you have PHP 7.4 or higher installed.
2. **Composer**: Used for managing PHP dependencies.
3. **Google Cloud Project**: You need a Google Cloud project set up with the **Google Drive API** enabled and a **Service Account** created.
4. **Service Account JSON Key**: You must have the JSON file for the Service Account.
5. **OAuth 2.0 Credentials**: Create OAuth 2.0 credentials for Google login.

---

## Step-by-Step Setup and Execution

### Step 1: Google Cloud Project Setup

1. **Create a new Google Cloud Project** or use an existing one.
2. **Enable Google Drive API**:
   - Go to **APIs & Services** → **Library**.
   - Search for "Google Drive API" and enable it.
3. **Create OAuth Credentials**:
   - Go to **APIs & Services** → **Credentials** → **Create Credentials**.
   - Choose **OAuth 2.0 Client IDs**.
   - Configure the OAuth consent screen:
     - Choose **External** if the app will be used outside your organization.
     - Fill in the required fields like the app name, support email, and developer contact.
   - Add an **Authorized Redirect URI** (e.g., `http://localhost/callback.php`).
   - Save the generated **Client ID** and **Client Secret**.
4. **Create a Service Account**:
   - Go to **IAM & Admin** → **Service Accounts**.
   - Create a new service account and assign it the appropriate role, such as **Editor**.
   - After creating the service account, download the **JSON Key**.

---

### Step 2: Clone the Repository and Install Dependencies

1. **Clone the project**:

```bash
git clone https://github.com/your-repo/google-drive-access-php.git
cd google-drive-access-php
