# EMW Prompt 05 — Code Review

Review the change as an independent reviewer, not as the author defending it.

1. Read the task requirements, acceptance criteria, relevant ADRs, and retrieved knowledge.
2. Inspect the complete changed code and nearby call sites; do not review a diff in isolation when context matters.
3. Prioritize correctness, data integrity, security, authorization, tenant isolation, privacy, reliability, performance, maintainability, and regression risk.
4. Check whether tests cover intended behavior, boundary cases, and failure paths. Do not assume tests pass unless run.
5. Identify concrete findings with severity, file/line, impact, reproduction or reasoning, and recommended fix.
6. Distinguish definite defects from questions and optional improvements.
7. Examine generated code adversarially. Do not accept an AI explanation as proof.
8. Identify what the human developer should be able to explain or modify independently.
9. Record reusable lessons using Prompt 08 only when verified and durable.

Output findings first, ordered by severity, then tested areas, unverified areas, and learning observations. If no findings are identified, say what was reviewed and what remains unverified; do not claim universal correctness.
