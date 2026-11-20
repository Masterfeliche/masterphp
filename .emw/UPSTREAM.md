# EMW Upstream Snapshot

This repository contains a curated, vendored subset of the Engineering Mastery Workflow framework.

- Upstream repository: https://github.com/Masterfeliche/ewm-principle
- Upstream branch at vendoring: `main`
- Upstream commit: `5fd6509c7ef3ce3b594f3dfbeb05c6044a181e66`
- Vendored on: 2026-11-20

## Update policy
The files in `.emw/core/`, `.emw/prompts/`, `.emw/templates/`, and `.emw/knowledge/` are a snapshot for this learning workspace. Project-specific state is stored outside those paths. When updating EMW, compare upstream changes and merge them deliberately; do not overwrite `.emw-project/`, `.project-knowledge/`, or PHP learning records.

The PHP-specific agent contract and learning sequence live in the root `AGENTS.md` and `learning/`. They adapt EMW to this pilot without replacing the canonical framework principles.
