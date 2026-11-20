# Knowledge Intelligence Layer (KIL)

## Purpose
The Knowledge Intelligence Layer (KIL) makes useful engineering experience persistent, discoverable, trustworthy, and reusable by future agents and developers. It connects project memory with the shared EMW knowledge base without confusing the two.

KIL is a core EMW subsystem. It is retrieval-based operational memory, not model training: an agent does not change its underlying model weights by reading knowledge files.

## Two knowledge stores

### A. Shared EMW Knowledge Base
Location in this framework repository: `.emw/knowledge/`.

Contains reviewed, reusable knowledge that can benefit multiple projects:
- Engineering patterns and architecture guidance.
- Debugging playbooks and verified failure lessons.
- Technology and tooling guidance.
- Security practices and threat patterns.
- Integration practices and protocol guidance.
- Learning strategies and assessment patterns.
- Agent workflow guidance.
- Research summaries with traceable sources and limitations.

This store must not contain customer data, credentials, private source code, proprietary project details, or unreviewed project-specific assumptions.

### B. Project Knowledge Base
Location in a consuming project: `.project-knowledge/`.

Contains that project's own durable context:
- Business rules, domain language and workflows.
- Architecture, data model and accepted design decisions.
- Repository conventions and implementation patterns.
- Integration details, environment caveats and operational runbooks.
- Known bugs, root causes, verified fixes and regression tests.
- Security boundaries, tenant rules and project-specific constraints.
- Lessons learned and rejected approaches.

Project knowledge remains owned by the project. It is not automatically copied to the shared EMW base.

## Relationship to other EMW records
Knowledge entries complement, but do not replace:
- ADRs: authoritative record of a decision and its context.
- Delivery ledger: current status of engineering work.
- Mastery ledger: evidence of the human developer's capabilities.
- Learning log: meaningful learning events and assistance used.
- Verification reports: observed checks and outcomes.

A knowledge entry should link to these records where appropriate rather than duplicate them.

## Mandatory retrieval behavior
Before meaningful work, the agent must:
1. Read `.emw/knowledge/README.md` and its index.
2. Search relevant knowledge by technology, category, problem, component, and risk.
3. Search `.project-knowledge/README.md` and the project index if present.
4. Read the most relevant entries and check their status, confidence, applicability, date, and limitations.
5. State briefly which knowledge was used, or that no relevant entry was found.

For trivial edits, retrieval may be skipped. High-risk work must retrieve relevant security, architecture, integration, or operational guidance even when the agent believes it already knows the pattern.

Do not dump the entire knowledge base into context. Retrieve only relevant entries and follow references.

## Knowledge lifecycle
1. **Discover:** identify a potentially reusable lesson, pattern, decision, failure, or technique.
2. **Capture:** create a candidate entry with problem, context, cause, approach, evidence, limitations, and provenance.
3. **Verify:** distinguish directly observed facts from hypotheses; link test output, source documentation, commits, ADRs, or reproducible steps.
4. **Classify:** choose project-local or shared scope and category.
5. **Review:** check correctness, duplication, sensitivity, relevance, generalizability, and freshness.
6. **Publish:** save project knowledge locally, or submit a reviewed contribution to shared EMW knowledge.
7. **Maintain:** update, supersede, deprecate, or delete entries when evidence changes.

## Confidence and status
- **Status:** draft, proposed, verified, deprecated, or superseded.
- **Confidence:** low, medium, or high.
- **Evidence strength:** observed directly, reproducible test, authoritative source, or reasoned guidance.

Only verified, appropriately sourced entries should be presented as established facts. Draft and proposed entries can inform investigation but must be labelled as unverified.

Confidence is not the same as status. A plausible entry may remain proposed; an entry can be verified for one version or context and still be unsuitable elsewhere.

## Required knowledge entry fields
Use `.emw/templates/knowledge-entry.md` and validate against `.emw/knowledge/knowledge-entry.schema.json` when machine validation is available:
- Stable ID and title.
- Category, scope, tags, technologies, and applicability.
- Problem / context.
- Observation or root cause.
- Recommended approach and alternatives.
- Evidence and provenance.
- Verification status and confidence.
- Limitations, caveats, and review metadata.
- Related entries, ADRs, issues, commits, or source links.

## Retrieval quality
Rank relevance using:
1. Exact problem and technology match.
2. Same architecture or integration boundary.
3. Same failure mode or security concern.
4. Project/version compatibility.
5. Evidence strength and current status.
6. Recency where the subject changes quickly.

Do not rank recency above correctness or evidence. Never treat keyword similarity as proof that advice applies.

## Capture rules
Capture knowledge when it is durable and likely to prevent repeated work, such as:
- A non-obvious root cause and verified fix.
- A repeatable implementation or review pattern.
- A project convention or important invariant.
- A security or reliability pitfall.
- A failed approach with a useful explanation.
- A meaningful tool or environment workaround.
- A research finding that changes an engineering or learning decision.

Do not capture routine edits, speculative explanations as facts, secrets, access tokens, personal data, private customer information, or large copied documentation.

## Project-to-shared promotion
A project entry may be proposed for the shared base only when:
1. It is generalized beyond the project's proprietary context.
2. Sensitive details and private code have been removed.
3. Evidence and limitations are explicit.
4. It is not already covered by a better entry.
5. A human reviews and approves the contribution.

Use `.emw/templates/knowledge-contribution.md` and the contribution guide. Agents may draft contributions; they must not silently publish project knowledge into the shared base.

## Conflict and freshness
- Prefer the current authoritative project decision over generic shared guidance when project constraints justify it; document the deviation.
- If two entries conflict, inspect dates, versions, evidence and scope. Do not silently choose one.
- Mark version-specific advice clearly.
- Propose review or deprecation when dependencies, APIs, security guidance, or project architecture change.
- Never delete a useful historical lesson merely because it is no longer current; supersede it with a clear link when appropriate.

## Agent completion behavior
For meaningful tasks, report:
- Knowledge entries retrieved and how they affected the work.
- New knowledge discovered and whether it was captured.
- Proposed or updated entries and their status.
- Any knowledge conflicts, stale guidance, or gaps.
