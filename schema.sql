DROP DATABASE IF EXISTS laravel;
CREATE DATABASE laravel;
USE laravel;
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  posted_by VARCHAR(255)
);

-- Insert the sample rows
INSERT INTO posts (title, description, created_at, updated_at, posted_by)
VALUES
  ('PHP', 'PHP is a cool language', '2025-06-24 17:46:25', NULL, 'Mahmoud'),
  ('Laravel', 'Laravel is a cool Framework', '2025-06-24 17:46:25', NULL, 'Hussain'),
  ('CSS', 'CSS is a cool stylesheet language', '2025-06-24 17:46:25', NULL, 'AHMED'),
  ('JavaScript', 'JS is a cool language', '2025-06-24 17:46:25', '2025-06-28 00:35:23', 'Mohamed');