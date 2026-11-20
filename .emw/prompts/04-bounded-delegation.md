# EMW Prompt 04 — Bounded Delegation

Use when Mode 4 is appropriate: narrow, routine, low-risk work that the developer can already understand and review.

Before acting, confirm:
- Exact task and expected result.
- Files or components in scope.
- Explicit exclusions.
- Existing project conventions.
- Required tests or checks.
- Whether the change has external, destructive, security, financial, or data-integrity impact.

Execution rules:
1. Do not broaden scope or refactor unrelated code.
2. Do not make consequential architecture or security decisions silently.
3. Use project knowledge and existing patterns.
4. Make the smallest coherent change.
5. Run the specified checks and record exact results.
6. Report assumptions, changed files, checks, failures, and unverified areas.
7. Do not claim mastery increased merely because the task was delegated.
8. Capture knowledge only if a durable non-obvious lesson was discovered.

If risk, novelty, or learning value is higher than expected, stop and recommend a more appropriate EMW mode.
