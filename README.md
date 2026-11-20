# MasterPHP

**From PHP basics to independent, professional PHP engineering.**

MasterPHP is a long-term PHP learning and project workspace. It is where I will deepen my understanding of PHP, build progressively more demanding software, and evaluate whether the Engineering Mastery Workflow (EMW) genuinely improves my engineering ability.

This is not a collection of copied tutorials. The goal is to learn the language deeply, understand the runtime and ecosystem, build real projects, and become capable of independently designing, implementing, debugging, testing, securing, and maintaining PHP applications.

## The two tracks
- **Learning:** concepts, guided labs, exercises, assessments, notes, and evidence of mastery.
- **Projects:** progressively more realistic applications that force the concepts into practice.

A completed project does not automatically mean its technologies have been mastered.

## Start here
1. Read [the learning roadmap](learning/roadmap.md).
2. Complete the [PHP baseline diagnostic](learning/baseline/baseline-assessment.md) without solution-level AI.
3. Record your starting position in [the developer profile](.emw-project/developer-profile.md) and [skill ledger](.emw-project/skill-ledger.yaml).
4. Read [the EMW experiment protocol](learning/emw-experiment/README.md).
5. Record your local PHP and Composer environment using [the setup checklist](learning/setup/README.md).
6. Use the results to decide which roadmap modules need depth and which can be shortened.

## Repository map
```text
masterphp/
├── AGENTS.md                       # Instructions for any coding agent
├── CLAUDE.md / GEMINI.md            # Agent adapters
├── opencode.json                   # OpenCode project configuration
├── .opencode/
│   ├── skills/                     # PHP mentor and engineering skills
│   └── commands/                   # PHP learning slash commands
├── .cursor/rules/                  # Cursor project rule
├── .github/
│   ├── copilot-instructions.md
│   └── workflows/php-quality.yml
├── .emw/                           # Pinned EMW core, prompts and templates
├── .emw-project/                   # Developer, delivery and mastery records
├── .project-knowledge/             # PHP and project-specific durable knowledge
├── learning/
│   ├── baseline/                   # Starting diagnostic and results
│   ├── roadmap.md                  # Foundations to advanced PHP
│   ├── modules/                    # Structured learning modules
│   ├── labs/                       # Small experiments
│   ├── exercises/                  # Independent practice
│   ├── assessments/                # Evidence-based mastery checks
│   ├── notes/                      # Personal explanations and mental models
│   ├── research/                   # Primary-source research
│   ├── prompts/                    # PHP-specific agent prompts
│   └── emw-experiment/             # Evaluate workflow effectiveness
├── projects/                       # Progressive PHP project portfolio
├── index.php                       # Safe workspace landing page
├── main.php                        # Original empty placeholder
├── composer.json
└── .gitignore
```

## Learning philosophy
- Learn PHP itself before relying on a framework to hide its behavior.
- Understand runtime, values, types, functions, objects, errors, HTTP, databases, security, and tooling.
- Prefer official PHP documentation and reproducible experiments.
- Use pseudocode and predictions before implementation when learning unfamiliar logic.
- Write code, run it, inspect it, break it deliberately, and debug it.
- Use AI as a mentor, reviewer, pair programmer, or bounded executor—not as a replacement for understanding.
- Revisit concepts with delayed retrieval and unfamiliar transfer exercises.
- Learn modern PHP without confusing framework knowledge with language mastery.

## PHP version policy

As of 20 November 2026, PHP 8.6.0 is the current stable release, released on 19 November 2026. MasterPHP uses PHP 8.6 as the default learning target. The Composer constraint allows PHP 8.5 and later within PHP 8.x, and examples should preserve 8.5 compatibility where practical until libraries and deployment environments support 8.6 consistently. The current GitHub Actions syntax workflow uses PHP 8.5 because the selected setup action does not yet offer stable PHP 8.6 in its current support matrix; run local smoke checks on stable PHP 8.6 as well. Do not use a release candidate or nightly build as a substitute for stable PHP 8.6.

- [Official PHP supported versions](https://www.php.net/supported-versions.php)
- [Official PHP releases and downloads](https://www.php.net/downloads.php)
- [PHP manual](https://www.php.net/manual/en/)

## Engineering Mastery Workflow

This repository vendors a pinned subset of EMW in `.emw/`. The root [AGENTS.md](AGENTS.md) routes compatible agents through onboarding, PHP-specific prompts, knowledge retrieval, project delivery, and independent mastery checks.

The workflow is being evaluated here, not merely used. We will compare baseline and later independent performance, record AI assistance, check delayed retention, and test transfer to unfamiliar PHP tasks. See [the EMW experiment](learning/emw-experiment/README.md) and [the first checkpoint](learning/emw-experiment/first-checkpoint.md).

## OpenCode

Open the repository root in OpenCode. It discovers the root `AGENTS.md`, `opencode.json`, skills, and slash commands.

Start with `/php-baseline`. Other shortcuts include `/php-learn`, `/php-challenge`, `/php-project`, `/php-review`, `/php-research`, and `/php-weekly`.

See [Using MasterPHP with OpenCode](docs/USING-OPENCODE.md).

Other agents should follow the root `AGENTS.md` through their repository instruction mechanisms; the repository includes Claude Code, Gemini CLI, Cursor, and Copilot adapters.

## Current state

The repository originally contained a basic `mysqli` connection experiment in root `index.php` and an empty `main.php`. The original connection experiment is now preserved at `projects/00-mysql-connection-lab/legacy-mysqli-connection.php`; the empty `main.php` placeholder remains untouched. The database example is a local learning artifact, not production-ready connection management. Its hard-coded local configuration must not be deployed or reused with real credentials.

The initial learning/project scaffold and EMW records are in place. **The PHP baseline has not yet been completed, and no PHP runtime or Composer checks have been run locally as part of this repository setup.**

## Quality checks

GitHub Actions runs Composer manifest validation and PHP syntax checks on PHP 8.5 for pushes and pull requests. This is a basic repository guard, not a substitute for project-specific tests, security checks, or running the learning projects locally.

## Guiding principle

**The target is not to finish PHP tutorials. The target is to become an engineer who understands PHP deeply enough to build with it independently.**
