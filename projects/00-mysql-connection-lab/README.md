# Project 00 — MySQL Connection Lab

**Status:** existing starter code to review and improve.

## Origin
The original repository had a root `index.php` that creates a MySQL connection with `mysqli`, a local `root` user, and an empty password. It is preserved in `legacy-mysqli-connection.php` as a learning artifact.

This is a local XAMPP-style experiment only. It is not production-ready:
- Credentials are hard-coded.
- It uses the database superuser.
- It terminates with raw connection error details.
- It does not close or manage a successful connection.
- It does not use application-level least privilege.
- It has no automated tests or environment-based configuration.

## Learning objectives
- Explain what the PHP MySQLi extension does.
- Inspect installed PHP extensions.
- Understand the difference between a database server, database, user, and connection.
- Compare MySQLi and PDO.
- Handle connection errors without exposing secrets or internals.
- Move connection settings out of source code.
- Understand why a dedicated least-privilege database user is preferable to root.

## Suggested tasks
1. Inspect and explain the legacy script without editing it.
2. Verify PHP version and MySQL extensions locally.
3. Connect using a dedicated local development user.
4. Create a safe configuration approach and keep credentials out of Git.
5. Refactor a second version to use PDO.
6. Add a simple connection test and document how to run it.
7. Explain which parts are local-only and what would be required before production use.

## Acceptance criteria
- Connection configuration is external to source code.
- No real credentials are committed.
- Failures are handled safely.
- The developer can explain MySQLi versus PDO at a basic level.
- A repeatable local verification step exists.

## Mastery evidence
Independently configure and debug a database connection, explain the exception/error behavior, and modify the connection implementation without solution-level AI.

## Files
- `legacy-mysqli-connection.php`: original starter experiment.
