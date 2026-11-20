# Project 02 — Contact & Inventory Manager

**Status:** planned; prerequisite concepts depend on baseline and Project 01 evidence.

## Product brief
Build a server-rendered PHP application to manage contacts and a simple inventory catalog.

## Core requirements
- Create, view, update, and delete contacts and inventory items.
- Validate all incoming form data on the server.
- Use relational tables, constraints, and prepared queries.
- Use PDO for persistence.
- Use server-side sessions for authenticated access.
- Apply authorization checks to protected actions.
- Escape output when rendering HTML.
- Handle errors without exposing credentials or sensitive details.

## Milestones
1. Understand the web request/response lifecycle.
2. Create a simple form and server-side validation.
3. Design relational schema and constraints.
4. Implement PDO repositories and CRUD.
5. Add authentication and session handling.
6. Add authorization, CSRF protection, and output encoding.
7. Add tests and security review.

## Security constraints
- No SQL string interpolation with user input.
- Passwords must be hashed with password hashing APIs.
- Authentication does not automatically imply authorization.
- State-changing requests must have CSRF protection.
- User content must be safely encoded for the output context.
- Do not store secrets in Git.

## Mastery gate
Independently implement an additional protected workflow, test invalid and unauthorized access, and explain how SQL injection, CSRF, and XSS are prevented.
