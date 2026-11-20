# Using MasterPHP with OpenCode

MasterPHP includes an OpenCode project configuration, PHP-specific skills, and slash commands.

## Setup
1. Clone the repository and open its root folder in OpenCode.
2. Start a new session.
3. OpenCode should discover the root `AGENTS.md`, `opencode.json`, skills under `.opencode/skills/`, and commands under `.opencode/commands/`.
4. The agent should read the EMW session-start prompt and check baseline status before proposing a curriculum.

Official OpenCode documentation:
- Instructions: https://opencode.ai/docs/instructions
- Skills: https://opencode.ai/docs/skills
- Commands: https://opencode.ai/docs/commands
- Configuration: https://opencode.ai/docs/config

## First command
Run:

```text
/php-baseline
```

This presents the diagnostic without giving you solutions. Complete the assessment independently and save the results.

Then use:
- `/php-learn <concept>` — learn a PHP topic.
- `/php-challenge <concept>` — receive an independent exercise with the answer withheld.
- `/php-project <project or milestone>` — work on a project milestone using EMW.
- `/php-review <file or diff>` — review PHP code.
- `/php-research <topic>` — research an advanced or version-specific PHP feature.
- `/php-weekly` — review engineering delivery, skill evidence, and EMW effectiveness.

## Skills
- `@php-mastery`: PHP teaching and assessment.
- `@php-engineering`: implementation, testing, architecture, and security.

## Important
Slash commands are reusable prompts, not pre-executed programs. OpenCode expands the prompt and the agent carries out the work using its available tools. Keep your local PHP runtime and database configuration separate from the AI agent; the agent cannot honestly claim a test ran unless it actually executed it.

If you already have an OpenCode configuration, merge MasterPHP's instruction paths into it rather than replacing unrelated model, provider, permission, MCP, or tool settings.
