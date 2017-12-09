CREATE user 'rusoko'@'localhost' identified by 'abc123';
GRANT select, insert, update, delete, create, drop, references, execute ON *.* TO 'rusoko'@'localhost';