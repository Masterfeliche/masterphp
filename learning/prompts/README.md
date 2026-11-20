# MasterPHP Prompt Library

These PHP-specific prompts complement the general EMW prompts in `.emw/prompts/`. They are standalone Markdown files that can be copied into any agent.

| Prompt | Use it when |
|---|---|
| [00-php-mentor-session.md](00-php-mentor-session.md) | Starting a PHP learning session |
| [01-baseline-review.md](01-baseline-review.md) | Reviewing your diagnostic answers and setting the starting point |
| [02-concept-deep-dive.md](02-concept-deep-dive.md) | Learning a PHP concept in depth |
| [03-independent-challenge.md](03-independent-challenge.md) | Practicing without being given the solution |
| [04-project-milestone.md](04-project-milestone.md) | Planning or implementing a project milestone |
| [05-advanced-php-research.md](05-advanced-php-research.md) | Investigating advanced or version-specific PHP behavior |

Compatible agents should use the root `AGENTS.md` and select the relevant prompt automatically. If an agent cannot read repository files, copy the prompt manually.
