# EMW Prompt Library

These prompts are first-class framework files. They are designed to be manually copyable and automatically selected by a coding agent.

## Automatic selection
An agent following root `AGENTS.md` must read this routing guide at session start and load the relevant prompt file when its trigger occurs. The user should not need to paste prompts for routine EMW behavior when the agent has repository access.

| Prompt | Automatic trigger | File |
|---|---|---|
| Universal bootstrap | Agent does not load repository instructions; manual fallback | [00-bootstrap-any-agent.md](00-bootstrap-any-agent.md) |
| Session start | Every new agent session or context reset | [00-session-start.md](00-session-start.md) |
| Project onboarding | Project is new, or onboarding state/profile is missing or materially outdated | [01-project-onboarding.md](01-project-onboarding.md) |
| Feature delivery | A meaningful feature or change is requested | [02-feature-delivery.md](02-feature-delivery.md) |
| Learn a technology | A new or weak technology/concept is needed | [03-learn-technology.md](03-learn-technology.md) |
| Bounded delegation | A narrow routine task is explicitly delegated or Mode 4 is selected | [04-bounded-delegation.md](04-bounded-delegation.md) |
| Code review | A PR, diff, generated code, or completed change needs review | [05-code-review.md](05-code-review.md) |
| Debugging | A defect, failing test, unexpected behavior, or incident is being investigated | [06-debugging.md](06-debugging.md) |
| Knowledge retrieval | Before meaningful work, and always for high-risk work | [07-knowledge-retrieval.md](07-knowledge-retrieval.md) |
| Knowledge capture | A durable lesson or non-obvious discovery is verified | [08-knowledge-capture.md](08-knowledge-capture.md) |
| Weekly review | Weekly review requested or scheduled | [09-weekly-mastery-review.md](09-weekly-mastery-review.md) |
| Shared contribution | Project knowledge may be generalized for EMW upstream | [10-shared-knowledge-contribution.md](10-shared-knowledge-contribution.md) |

## Automatic onboarding rules
Treat a consuming project as **not onboarded** when project-owned onboarding state is absent, incomplete, or materially stale. Expected locations:
- `.emw-project/onboarding-status.yaml`
- `.emw-project/project-profile.md`
- `.emw-project/delivery-ledger.md`
- `.emw-project/skill-ledger.yaml`
- `.project-knowledge/README.md` and `index.yaml`

If these records are absent, automatically read and follow `01-project-onboarding.md` before feature implementation. Read-only reconnaissance may happen first. Do not repeat completed onboarding without a refresh trigger.

If the repository being worked on is the EMW framework repository itself, do not onboard it as an unrelated software product. Follow its contributor context and shared-knowledge governance.

## Manual use
Users can open any prompt file and copy its complete prompt into an agent that does not reliably load repository instructions. The universal fallback is `00-bootstrap-any-agent.md`; task prompts are separate files and can be used directly.

## Prompt execution contract
- A prompt file is a reusable instruction, not an executable tool or hidden function call.
- "Automatically load" means the agent reads and follows the selected repository file when its trigger occurs, subject to the agent's repository-access and instruction-loading capabilities.
- If the agent cannot read files or does not load instructions automatically, the user must paste the relevant prompt or provide the file contents.
- Do not repeatedly run onboarding after it is complete; refresh only when major architecture, stack, ownership, or project goals change.

## OpenCode shortcuts
When using OpenCode, the same workflows are available as project slash commands in `.opencode/commands/`:
- `/emw-onboard`
- `/emw-feature`
- `/emw-learn`
- `/emw-debug`
- `/emw-review`
- `/emw-weekly`
- `/emw-capture`

Reusable skills are available under `.opencode/skills/`: `emw-workflow`, `emw-knowledge`, and `emw-mastery`. See [OpenCode Integration](../../docs/USING-OPENCODE.md). The prompt files in this directory remain the canonical task instructions; OpenCode commands and skills are adapters that route to them.
