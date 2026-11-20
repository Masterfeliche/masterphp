---
# Example placeholder metadata. Replace these values before publishing an entry.
id: "KB-0001"
title: "Replace with a descriptive knowledge title"
status: "draft"
confidence: "low"
category: "debugging"
scope: "project-local"
summary: "Replace with a concise, searchable one-sentence lesson."
context: "Describe the system, versions, and conditions where this applies."
problem: "Describe the problem or question addressed."
root_cause_or_principle: "Describe the verified cause or underlying principle."
recommended_approach: "Describe the actionable recommended approach."
alternatives: []
technologies: []
versions: []
tags: []
applicability: "State preconditions and applicability."
evidence: []
limitations: []
related_entries: []
related_adrs: []
source_project: ""
created_at: "2026-11-20"
last_reviewed: "2026-11-20"
review_trigger: "State what change should trigger a review."
supersedes: []
superseded_by: ""
---

# Replace with the knowledge title

## Summary
A short, searchable statement of the lesson.

## Context and applicability
Where does this apply? Include relevant architecture, versions, constraints, and preconditions.

## Problem or question
What problem, decision, or recurring task does this knowledge address?

## Observation / root cause / principle
Separate direct observations from interpretation. For a bug, explain the verified root cause. For a pattern, explain why it works.

## Recommended approach
Give a safe, actionable sequence or pattern. Link to project examples rather than duplicating large code blocks.

## Alternatives and trade-offs
What else could be done? When would this recommendation not fit?

## Evidence and provenance
For every item in frontmatter `evidence`, explain how it was obtained:
- Reproduction / test / command:
- Observed result:
- Source files / commit / ADR / issue:
- Authoritative references:
- Evidence type: direct observation / reproducible test / authoritative source / reasoned guidance

## Limitations and caveats
List version constraints, failure cases, assumptions, and unverified areas.

## Related knowledge
- 

## Maintenance
- Review trigger:
- Supersedes / superseded by:

> Validate frontmatter against `.emw/knowledge/knowledge-entry.schema.json` when validation tooling is available. A template filled with placeholders is not a knowledge claim. Do not label an entry verified unless the evidence supports its stated applicability.
