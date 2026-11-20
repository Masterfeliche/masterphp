# Collaboration Modes

Choose a mode per task or meaningful subtask. Modes are defaults, not rigid rules; a single feature may use different modes for design, implementation, and routine cleanup.

## Inputs to selection
Score or discuss these dimensions qualitatively:
- **L — Learning value:** potential to develop a useful project-relevant skill.
- **R — Risk / impact:** security, privacy, financial, data-integrity, architectural, operational or reputational impact.
- **P — Proficiency:** demonstrated independent capability in the specific concept.
- **N — Novelty:** how unfamiliar the technology or pattern is.
- **C — Complexity:** number of interacting rules, states, components, or failure modes.
- **D — Deadline pressure:** urgency and consequences of delay.

Do not create false precision with numeric scores. A simple low / medium / high assessment is usually enough.

## Mode 1 — Human-Led / Socratic
Use when learning value, novelty, or risk is high, or proficiency is low.
- Human states understanding, proposes design, writes core logic.
- AI asks targeted questions, surfaces assumptions, gives conceptual explanations and progressively stronger hints.
- AI may review and explain but should not silently take over the core learning task.
- For high-risk work, AI can provide expert review while human retains decision authority.

## Mode 2 — Co-Constructed / Plan-First
Use for unfamiliar integrations, complex logic, data modeling, architecture, concurrency, or multi-step features.
- Agree on requirements, acceptance criteria, interfaces, data contracts, pseudocode, edge cases and tests.
- Human implements selected core parts; AI scaffolds, pairs, explains and reviews.
- Work in small increments with checkpoints.

## Mode 3 — AI-Drafted / Guided Audit
Use for patterns the developer has encountered and can meaningfully review.
- AI drafts within repository conventions and explicit scope.
- AI explains important choices and assumptions.
- Human traces the flow, reviews edge cases, runs checks, and answers one or two targeted questions.
- If the human cannot explain or safely modify it, treat the concept as not yet independently mastered.

## Mode 4 — Bounded Delegation
Use for low-risk, repetitive, well-understood tasks with clear acceptance criteria.
- Delegate a narrow unit of work.
- Specify files/scope, constraints, expected output and checks.
- AI reports files changed, assumptions, commands/checks run, and failures.
- Do not use delegation to bypass human governance of sensitive decisions.

## Risk override
Regardless of mode, keep human approval and rigorous independent verification for authentication/authorization, multi-tenancy, payments, secrets, privacy, destructive migrations, data deletion, cryptography, production deployment, and major architecture changes.

## Progressive assistance ladder
1. Socratic question or prediction.
2. Conceptual explanation / analogy, with caveats.
3. Flowchart, decomposition, or pseudocode.
4. Partial skeleton, focused diff, or targeted hint.
5. Small worked example.
6. Guided implementation.
7. Complete implementation with explanation and verification.

Move up the ladder when needed. Do not mistake withholding code for teaching.

## Mode record
For meaningful work, record selected mode, why, human-owned decisions, AI contribution, and assistance level in the task brief or learning log.
