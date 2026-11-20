# EMW Effectiveness Pilot — MasterPHP

## Purpose
MasterPHP is a practical pilot for testing whether Engineering Mastery Workflow helps the developer both deliver PHP projects and become more independently capable.

This is a single-developer longitudinal experiment, not a controlled scientific study. Findings should be treated as personal, project-specific evidence—not proof that EMW works for everyone.

## Hypotheses to examine
1. Adaptive collaboration modes can preserve independent reasoning on unfamiliar PHP concepts.
2. Progressive hints can help the developer move forward without immediately surrendering the implementation.
3. Knowledge retrieval can reduce repeated mistakes and rediscovery.
4. Separate delivery and mastery ledgers can reveal when a feature is complete but the underlying concepts remain weak.
5. Planned reductions in AI assistance can improve independent implementation and debugging evidence over time.

These are hypotheses, not established conclusions.

## Measurement points

### T0 — Baseline
Complete `../baseline/baseline-assessment.md` without solution-level AI. Record current skills, performance, time, documentation, and uncertainty.

### T1 — Module checkpoints
At the end of each major module, use a new independent task covering the same concepts. Avoid reusing the exact practice problem.

### T2 — Project milestones
For each project, record:
- Delivery status and acceptance criteria.
- Code quality and tests actually run.
- Concepts encountered.
- Human-owned implementation and decisions.
- AI contribution and A0–A4 assistance.
- Independent explanation/debugging evidence.

### T3 — Delayed retention
After a suitable delay (typically about one week), ask the developer to explain or solve a new short problem without solution-level AI. Do not use the old answer as a prompt.

### T4 — Transfer
Use a new scenario that requires the same underlying PHP concepts but changes the domain, data shape, or failure condition.

## Evidence to collect
- Correctness and completeness of independent work.
- Ability to explain execution and design decisions.
- Ability to predict behavior before running code.
- Debugging process and root-cause accuracy.
- Test quality and edge-case selection.
- Assistance level A0–A4.
- Confidence versus observed result.
- Retention and transfer results.
- Knowledge retrieval usefulness and stale/conflicting entries.

Avoid treating lines of code, number of prompts, speed alone, or task completion as mastery measures.

## EMW comparison
For important concepts, record:
1. What the developer did before receiving solution-level help.
2. Which progressive assistance step was needed.
3. What AI supplied.
4. Whether the developer could later reproduce or transfer the skill independently.

Where practical, compare similar tasks with different levels of assistance. Record task difficulty and other factors; do not claim a causal effect from a small, uncontrolled comparison.

## Review decision
At each monthly review, answer:
- Which EMW practices helped?
- Which practices added overhead without learning value?
- Which concepts improved on independent evidence?
- Where did AI assistance remain high?
- Did knowledge retrieval prevent a repeated error?
- Which changes to the workflow should be tested next?

Keep the workflow adaptable. The purpose is to improve it based on observed evidence, not to confirm a predetermined conclusion.
