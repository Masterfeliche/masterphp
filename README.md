# MasterPHP

**From PHP basics to independent, professional PHP engineering.**

MasterPHP is a long-term PHP learning and project workspace. It is where I will deepen my understanding of PHP, build progressively more demanding software, and evaluate whether the Engineering Mastery Workflow (EMW) genuinely improves my engineering ability.

This is not a collection of copied tutorials. The goal is to learn the language deeply, understand the runtime and ecosystem, build real projects, and become capable of independently designing, implementing, debugging, testing, securing, and maintaining PHP applications.

## The two tracks

- **Learning:** concepts, guided labs, exercises, assessments, notes, and evidence of mastery.
- **Projects:** progressively more realistic applications that force the concepts into practice.

Every meaningful project contributes to learning, but a completed project does not automatically mean its technologies have been mastered.

## Start here

1. Read [the learning roadmap](learning/roadmap.md).
2. Complete the [PHP baseline diagnostic](learning/baseline/baseline-assessment.md) before following a fixed beginner sequence.
3. Record your starting position in [the developer profile](.emw-project/developer-profile.md).
4. Read [the EMW experiment protocol](learning/emw-experiment/README.md).
5. Start the first lab or project only after the baseline has identified the most useful starting point.

## Repository map

```text
masterphp/
├── AGENTS.md                       # Instructions for any coding agent
├── opencode.json                   # OpenCode project configuration
├── .opencode/
│   ├── skills/                     # PHP mentor and EMW skills
│   └── commands/                   # PHP learning slash commands
├── .emw/                           # Pinned EMW core, prompts and templates
├── .emw-project/                   # My delivery and mastery records
├── .project-knowledge/             # PHP and project-specific durable knowledge
├── learning/
│   ├── baseline/                   # Starting diagnostic
│   ├── roadmap.md                  # Conceptual path from foundations to advanced PHP
│   ├── modules/                    # Structured learning modules
│   ├── labs/                       # Small focused experiments
│   ├── exercises/                  # Independent practice
│   ├── assessments/                # Evidence-based mastery checks
│   ├── notes/                      # My own explanations and mental models
│   ├── research/                   # Primary-source and ecosystem research
│   └── emw-experiment/             # Evaluate whether EMW helps learning
├── projects/
│   ├── 00-mysql-connection-lab/
│   ├── 01-cli-expense-tracker/
│   ├── 02-contact-inventory-manager/
│   ├── 03-rest-api/
│   ├── 04-mini-mvc-framework/
│   ├── 05-capstone/
│   └── README.md
├── src/                            # Shared workspace utilities, if needed
├── tests/                          # Shared tests, if needed
├── composer.json
└── .gitignore
```

## Learning philosophy

- Learn PHP itself before relying on a framework to hide its behavior.
- Understand the runtime, values, types, functions, objects, errors, HTTP, databases, security, and tooling.
- Prefer official PHP documentation and reproducible experiments.
- Use pseudocode and predictions before implementation when learning unfamiliar logic.
- Write code, run it, inspect it, break it deliberately, and debug it.
- Use AI as a mentor, reviewer, pair programmer, or bounded executor—not as a replacement for understanding.
- Revisit concepts with delayed retrieval and unfamiliar transfer exercises.
- Learn modern PHP and its ecosystem without confusing framework knowledge with language mastery.

## PHP version policy

As of 20 November 2026, PHP 8.6.0 is the current stable release. MasterPHP uses PHP 8.6 as the default learning target, while noting compatibility with PHP 8.5 where appropriate for libraries or environments that have not yet adopted 8.6. Do not use a release candidate for ordinary learning or project work. Re-check official support and release information when updating this policy.

- [Official PHP supported versions](https://www.php.net/supported-versions.php)
- [Official PHP releases and downloads](https://www.php.net/downloads.php)
- [PHP manual](https://www.php.net/manual/en/)

## Engineering Mastery Workflow

This repository vendors a pinned subset of EMW in `.emw/`. The root [AGENTS.md](AGENTS.md) routes compatible agents through project onboarding, the PHP learning prompts, knowledge retrieval, project delivery, and independent mastery checks.

The workflow is being evaluated here, not merely used. We will compare baseline and later independent performance, record AI assistance, check delayed retention, and test transfer to unfamiliar PHP tasks. See [the EMW experiment](learning/emw-experiment/README.md).

## Current state

The repository originally contained a basic `mysqli` connection experiment in root `index.php` and an empty `main.php`. The original files are preserved for now. The database example is a local learning artifact, not production-ready connection management. Its hard-coded local configuration must not be deployed or reused with real credentials.

## Guiding principle

**The target is not to finish PHP tutorials. The target is to become an engineer who understands PHP deeply enough to build with it independently.**
