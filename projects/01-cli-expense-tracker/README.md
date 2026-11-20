# Project 01 — CLI Expense Tracker

**Status:** planned; begin after baseline review.

## Product brief
Build a command-line application for recording, listing, categorizing, and summarizing personal expenses. Start with a simple in-memory implementation, then add JSON persistence and a more maintainable design.

## Why this project comes first
It forces core PHP reasoning without a web framework, database, or complex UI hiding the language fundamentals.

## Core requirements
- Add an expense with description, amount in minor units (cents), category, and date.
- List expenses.
- Filter by category and date range.
- Summarize total spending and totals by category.
- Validate invalid input and handle missing/corrupt storage.
- Persist data to a local JSON file.
- Provide clear CLI help and error messages.

## Milestones
1. Functions and arrays: in-memory transaction operations.
2. Types and validation: explicit inputs, return values, malformed data.
3. File and JSON handling: load/save, missing file, invalid JSON, write failures.
4. OOP and composition: model, service, storage boundary.
5. Composer and namespaces: organize code and autoloading.
6. Testing: unit tests, edge cases, and regression checks.
7. Refactor: improve design without changing behavior.

## Constraints
- Store money as integer minor units, not binary floating-point amounts.
- Do not add a database or framework in the first milestone.
- Keep the persistence format documented.
- Do not use AI-generated implementation as independent mastery evidence.

## Acceptance criteria
- All stated workflows work from the terminal.
- Invalid input is rejected predictably.
- Persistence survives process restarts.
- Corrupt or missing files are handled safely.
- Important behavior has tests.
- The developer can independently implement a new report or filter.

## Mastery gate
Given a new expense-reporting requirement, implement it independently, explain the data flow, add tests, and debug an intentionally broken test without solution-level AI.
