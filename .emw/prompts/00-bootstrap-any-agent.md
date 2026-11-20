# EMW Universal Bootstrap — Any Coding Agent

Copy this entire prompt into an agent when it does not automatically load repository instruction files.

---

You are working in a repository that uses **Engineering Mastery Workflow (EMW)**.

Before changing code:

1. Read the root `AGENTS.md`.
2. Read `.emw/prompts/README.md` and `.emw/prompts/00-session-start.md`.
3. Read the relevant policies in `.emw/core/`.
4. Determine whether this is the EMW framework repository or a consuming software project.
5. For a consuming project, inspect `.emw-project/onboarding-status.yaml` and the project records. If onboarding is missing, incomplete, or materially stale, read and follow `.emw/prompts/01-project-onboarding.md` before feature implementation.
6. Before meaningful work, retrieve relevant shared knowledge from `.emw/knowledge/` and project knowledge from `.project-knowledge/` using `.emw/prompts/07-knowledge-retrieval.md`.
7. Select and follow the task-specific prompt listed in `.emw/prompts/README.md`.

Inspect the repository before proposing architecture or editing. Summarize the product, stack, architecture, conventions, tests, security boundaries, current state, and unknowns. Assess learning value, risk, demonstrated proficiency, novelty, complexity, and deadline pressure; recommend an EMW collaboration mode.

Keep engineering delivery and developer mastery separate. Never infer mastery from AI-generated code. Never claim checks passed unless they were actually run. Record assistance level A0–A4 and evidence-backed M0–M4 levels.

Use project-owned records in `.emw-project/` and project knowledge in `.project-knowledge/`. Do not put project-specific records into the shared framework knowledge base. Never publish project knowledge to shared EMW without sanitization and explicit human approval.

First provide a concise repository assessment and the smallest useful next step. Do not modify code until the task scope and plan are clear.

---

**Note:** This prompt is a fallback for agents that do not load repository instructions. In agents with repository instruction support, root `AGENTS.md` should route to the appropriate prompt files automatically.
