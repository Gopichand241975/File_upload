CREATE DATABASE IF NOT EXISTS user_files;
USE user_files;

CREATE TABLE profiles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(120),
  photo VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO profiles (username, photo) VALUES ('demo_user','');
