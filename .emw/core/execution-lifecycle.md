# Six-Stage Execution Lifecycle

## 1. ANALYZE
- Inspect repository, relevant files, architecture, stack, conventions and current state.
- Clarify the user problem and distinguish requirements from assumptions.
- Retrieve relevant shared and project knowledge before meaningful work.
- Assess L/R/P/N/C/D and choose collaboration mode.
- Identify risks, dependencies, unknowns, and learning opportunities.

**Exit:** shared understanding of task, scope, constraints, relevant knowledge, risks, and collaboration mode.

## 2. SPECIFY & PLAN
- Define behavior, acceptance criteria and non-goals.
- Identify interfaces, data contracts, entities, permissions and state transitions.
- Write pseudocode or a sequence when logic is non-trivial.
- Consider failure paths, edge cases, observability, accessibility and security.
- Define tests and a small execution sequence.
- State the human learning objective if relevant.
- Identify knowledge entries that constrain or inform the design.

**Exit:** an implementation-ready plan proportionate to task size.

## 3. EXECUTE
- Work in small increments.
- Keep changes within scope and follow repository conventions.
- Explain consequential changes; ask the human to own selected reasoning or implementation.
- Update the plan when discoveries change scope, and obtain approval for material changes.
- Capture potentially useful discoveries as candidates, not established knowledge.

**Exit:** implementation is ready for verification, with assumptions and deviations visible.

## 4. VERIFY
- Run relevant automated tests, type checks, linters, builds, migrations or manual checks.
- Review correctness, security, data integrity and regressions.
- Ask for an independent demonstration where mastery is a goal: explain, trace, debug, modify or implement.
- Distinguish observed results from checks not run.
- Verify knowledge claims before marking an entry as verified.

**Exit:** evidence-based engineering status and, separately, learning evidence.

## 5. CONSOLIDATE
- Update project delivery records with completed work, defects, decisions and remaining work.
- Update mastery records only when meaningful evidence exists.
- Capture durable, verified lessons in project knowledge using Prompt 08.
- Record AI assistance and provenance.
- Propose shared knowledge only through the reviewed contribution process; never publish project data automatically.

**Exit:** concise, accurate project, mastery, and knowledge records.

## 6. EVOLVE
- Identify technical debt, architectural pressure, repeated friction and new skill gaps.
- Review stale or conflicting knowledge and propose updates or deprecation.
- Decide what should change in the workflow or project.
- Choose the next task with delivery and learning balanced.
- Promote generalized project lessons to shared EMW only after sanitization and human approval.
- Retire stale records without erasing important history.

**Exit:** prioritized next work and a knowledge base that improves without accumulating unchecked noise.
