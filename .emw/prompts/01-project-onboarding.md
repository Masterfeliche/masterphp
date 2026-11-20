# EMW Prompt 01 — Project Onboarding

Use this prompt automatically when a project has not been onboarded, or manually when starting a new project.

You are onboarding this repository into EMW. Do not implement product features during onboarding.

## Instructions
1. Read root `AGENTS.md`, `.emw/core/`, and the relevant prompt/knowledge guidance.
2. Inspect the repository structure, entry points, manifests, dependencies, configuration, tests, migrations, deployment files, and documentation.
3. Identify the product purpose, users, workflows, constraints, stack, versions, architecture, data model, integrations, security boundaries, and operational setup.
4. Identify existing tests and run a safe baseline only when appropriate. Record commands and observed results. Do not change production data or perform destructive operations.
5. Search shared EMW knowledge and any existing project knowledge. Note applicable guidance and conflicts.
6. Identify unknowns, risks, technical debt, and decisions that require human confirmation.
7. Build a project-specific skill map based on technologies and concepts actually used or required. Separate S1 project mastery, S2 foundations, and S3 ecosystem literacy.
8. Assess initial skill levels conservatively. Use M0 or "unverified" where evidence is absent. Do not treat AI-written code as independent proficiency.
9. Establish a delivery ledger, mastery ledger, project profile, and project knowledge index.
10. Propose the first milestone and an appropriate collaboration mode.

## Required project-owned outputs
Create or update:
- `.emw-project/project-profile.md`
- `.emw-project/onboarding-status.yaml`
- `.emw-project/delivery-ledger.md`
- `.emw-project/skill-ledger.yaml`
- `.project-knowledge/README.md`
- `.project-knowledge/index.yaml`

Use framework templates under `.emw/templates/`. Never overwrite existing project records without inspecting and merging them.

## Final onboarding report
Provide:
- Product and architecture summary.
- Technology and dependency map.
- Main workflows and data boundaries.
- Existing testing and observed baseline.
- Security, reliability, and architectural risks.
- Relevant knowledge retrieved.
- Initial skill map and evidence gaps.
- First milestone, collaboration mode, and human-owned decisions.

Ask the human to confirm only consequential assumptions; make safe, clearly labelled provisional observations where possible.
