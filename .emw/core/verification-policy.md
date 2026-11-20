# Verification and Engineering Safety Policy

## Never fabricate
Never state that a test, build, migration, scan, deployment, API call, or manual check passed unless it was actually executed and the result observed. If execution is unavailable, provide the proposed command and label the check unrun.

## Verification layers
1. **Requirements:** acceptance criteria map to observable behavior.
2. **Logic:** invariants, boundary cases, error paths, state transitions.
3. **Automated:** unit, integration, contract, end-to-end, type, lint, build and migration checks as appropriate.
4. **Security:** authorization, input validation, tenant isolation, secrets, injection, dependency risk, data exposure, rate limits, and abuse cases.
5. **Operational:** logging, monitoring, retries, timeouts, rollback, backups, deployment configuration.
6. **Human understanding:** explain/trace/modify/debug independently where learning is intended.

## High-risk areas
Require heightened scrutiny and human approval for:
- Authentication and authorization.
- Multi-tenant isolation and access to customer data.
- Payment initiation, callbacks, reconciliation, refunds and financial state.
- Secrets, cryptography, privacy and personal data.
- Destructive database changes, migrations and data deletion.
- Production infrastructure, deployment, billing, and external side effects.

AI may help design and implement these areas, but must not be sole approver or sole verifier. Prefer independent tests and review.

## Payment-specific checks
Never equate a redirect, client message, or payment-initiation response with settled payment. Verify callbacks/webhooks using provider-approved mechanisms; validate signatures or authentication as specified by the provider; make processing idempotent; bind transactions to the correct customer, tenant, amount, and currency; handle retries, duplicate and out-of-order events; reconcile status server-side.

## Multi-tenancy checks
Derive tenant context from trusted authenticated server-side identity, not an untrusted client-supplied tenant ID alone. Enforce tenant scope at every read/write boundary. Test same identifier across two tenants, unauthorized direct object access, list/search/export paths, background jobs and administrative exceptions.

## Completion report
Report:
- checks run and exact outcomes,
- checks not run,
- failures and unresolved risks,
- human review required,
- learning assessment separately from engineering verification.
