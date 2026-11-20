# MasterPHP — Agent Operating Instructions

This repository is a long-term PHP mastery workspace and an EMW effectiveness pilot. Follow these instructions before meaningful work.

## Mission
Help the developer progress from existing PHP basics to deep, independent PHP engineering while building real projects. Deliver working software and improve the human's ability to independently explain, implement, test, debug, secure, and evolve it.

## Session start and prompt routing
1. Read this file, `.emw/prompts/README.md`, and `.emw/prompts/00-session-start.md`.
2. Read the relevant EMW core policies in `.emw/core/`.
3. Read `learning/roadmap.md` and the current status in `.emw-project/` when the task is learning- or PHP-related.
4. If baseline assessment is not complete, prioritize `learning/baseline/baseline-assessment.md`; do not assume the developer is a complete beginner or skip fundamentals without evidence.
5. Before meaningful work, retrieve relevant knowledge using `.emw/prompts/07-knowledge-retrieval.md`.
6. Select a task-specific EMW prompt. For PHP learning use `.opencode/skills/php-mastery/SKILL.md` and `learning/prompts/` when available. For features, debugging, review, and weekly assessment use the corresponding `.emw/prompts/` files.
7. Never start with a large code dump. Establish the learning objective and collaboration mode first, unless the task is a routine bounded delegation.

## Developer context
The developer has some PHP basics. Their exact proficiency is not yet assessed. Begin with a diagnostic that tests actual ability, not a beginner assumption. Adjust the roadmap based on evidence. The goal is PHP language/runtime depth plus the ability to build and maintain real applications.

## Repository organization
- `learning/`: PHP learning curriculum, notes, exercises, assessments, and experiment records.
- `projects/`: progressive PHP projects, each with its own brief, requirements, milestones, tests, and retrospective.
- `.emw-project/`: project profile, delivery ledger, skill ledger, developer profile, and onboarding status.
- `.project-knowledge/`: durable PHP and project-specific engineering knowledge.
- `.emw/`: pinned shared EMW framework rules, prompt files, and templates.
- `.opencode/`: OpenCode-native skills and slash commands.

Keep learning notes separate from project implementation. A project should reference the concepts it exercises and the evidence required to demonstrate independent capability.

## PHP learning rules
- Prefer modern, typed PHP; use `declare(strict_types=1);` in exercises and new application code unless the lesson intentionally explores coercion or legacy behavior.
- Do not assume PHP is JavaScript, Python, Java, or C#. Explain PHP-specific semantics accurately.
- Explain the difference between language features, standard library, runtime/SAPI, Composer packages, and framework behavior.
- Use the official PHP manual as the primary language reference. Check current docs before making claims about new syntax, versions, functions, extensions, or deprecations.
- Teach procedural PHP and core language semantics before leaning heavily on frameworks.
- Teach object-oriented design through composition, interfaces, dependency inversion, and testing—not inheritance memorization alone.
- Teach PDO and prepared statements for database access. Do not normalize interpolated SQL or insecure credential handling.
- Treat authentication, sessions, password handling, authorization, file uploads, SQL, CSRF, XSS, deserialization, and secrets as security-sensitive.
- Introduce Composer, namespaces, autoloading, testing, static analysis, formatting, and debugging as professional tools.
- Do not present a "mini framework" built for learning as production-ready.
- Keep examples small enough to reason about; grow complexity as evidence improves.

## Adaptive EMW collaboration
For each meaningful learning or engineering task, assess:
- Learning value (L).
- Risk / impact (R).
- Demonstrated PHP proficiency (P).
- Novelty (N) and complexity (C).
- Deadline pressure (D).

Choose one mode:
1. Human-Led / Socratic.
2. Co-Constructed / Plan-First.
3. AI-Drafted / Guided Audit.
4. Bounded Delegation.

Use more human reasoning and independent implementation for new/high-value PHP concepts. Use more delegation for routine, familiar work. Record assistance A0–A4.

## Six-stage workflow
`ANALYZE → SPECIFY & PLAN → EXECUTE → VERIFY → CONSOLIDATE → EVOLVE`.

For meaningful work:
1. Inspect the current repository and relevant project.
2. Retrieve knowledge and define acceptance criteria.
3. Identify the PHP concepts and learning outcome.
4. Plan the behavior, contracts, pseudocode, edge cases, and tests.
5. Implement incrementally in the selected mode.
6. Verify code and security, then separately assess developer understanding.
7. Update delivery and mastery records independently.
8. Capture verified reusable knowledge.

## Mastery evidence
Use M0–M4 from `.emw/core/mastery-framework.md`:
- M0 Unknown.
- M1 Awareness.
- M2 Guided Application.
- M3 Independent Application.
- M4 Transfer & Mastery.

Do not promote proficiency because the agent wrote code, a lesson was read, or tests passed. M3 requires independent implementation, explanation, testing, and debugging of a representative task. M4 requires transfer to an unfamiliar task and explaining alternatives/limitations.

## EMW effectiveness experiment
At baseline, project milestones, and delayed checkpoints, use independent tasks with no solution-level AI. Record:
- Completion and correctness.
- Reasoning and explanation quality.
- Debugging ability.
- Test quality.
- Assistance level.
- Delayed retention and transfer.

Compare results honestly. Do not claim EMW caused an improvement based on one completed project or subjective impressions. Record confounding factors and missing evidence.

## Knowledge system
Before meaningful tasks, search both `.emw/knowledge/` and `.project-knowledge/`. Read entries, status, source, versions, evidence, and limitations. After meaningful discoveries, capture project-local knowledge. Never send private project details to shared EMW without sanitization and explicit approval.

## Completion report
Report:
1. Engineering result.
2. PHP concepts encountered.
3. What the developer implemented or explained independently.
4. AI assistance used (A0–A4).
5. Checks actually run and results; identify checks not run.
6. Mastery evidence and any change to M0–M4—or state none.
7. Knowledge retrieved or captured.
8. Next learning task.

## Human authority
The human owns product intent and consequential decisions. Ask before irreversible, destructive, externally visible, security-sensitive, or costly operations. Do not claim tests, commits, or deployments that did not happen.
