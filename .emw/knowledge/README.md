# Shared EMW Knowledge Base

This directory contains curated, reusable engineering knowledge for projects using EMW.

## Contents
- `index.yaml`: lightweight manifest of knowledge entries and their metadata.
- `knowledge-entry.schema.json`: machine-readable entry structure.
- Category folders: knowledge documents grouped by topic.
- `../templates/knowledge-entry.md`: authoring template.
- `../core/knowledge-intelligence.md`: rules for retrieval, capture, verification, and promotion.

## Shared versus project knowledge
This is the **shared framework knowledge base**. It must contain only generalized material suitable for reuse across unrelated projects. Project-specific context belongs in the consuming repository's `.project-knowledge/` directory.

## Retrieval
Agents should search the index first, then open the matching knowledge documents. The index is a navigation aid, not proof; always read the source entry and inspect its status, evidence, applicability, and limitations.

## Entry lifecycle
- `draft`: incomplete or not yet checked.
- `proposed`: prepared for review; not established guidance.
- `verified`: evidence and applicability have been reviewed.
- `deprecated`: no longer recommended; retained for history.
- `superseded`: replaced by another entry.

Do not treat draft or proposed entries as verified facts.

## Contributing
Use `.emw/templates/knowledge-contribution.md` and Prompt 10. Project entries are not automatically promoted. Human review is required before shared publication.

## Current state
The category structure and schema are ready. Entries should be added when supported by real evidence; do not populate this knowledge base with invented examples merely to make it look complete.
