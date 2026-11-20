# MasterPHP Learning Roadmap

This roadmap is competency-based, not a fixed calendar. Your existing PHP basics should be validated by the baseline diagnostic. If you demonstrate a concept independently, we can skip repetitive beginner content and move to depth or transfer exercises.

## Learning target

Develop professional, modern PHP capability across:
1. PHP language semantics and runtime.
2. Procedural and object-oriented programming.
3. Type system, error handling, and code organization.
4. Composer, autoloading, and ecosystem standards.
5. HTTP and secure web development.
6. SQL, PDO, data modeling, and transactions.
7. Testing, static analysis, debugging, and maintainability.
8. Architecture and production engineering.
9. Advanced language features and performance.
10. Framework literacy and production projects.

## Version policy

Use PHP 8.6 as the current stable learning target (released 19 November 2026). Keep code compatible with PHP 8.5 where practical until a library, tool, or deployment target requires otherwise. For every version-specific feature, record the minimum PHP version and verify it against the official manual. Never build a production project on a release candidate.

Official references:
- https://www.php.net/manual/en/
- https://www.php.net/supported-versions.php
- https://www.php.net/releases.php
- https://www.php.net/migration86.php

## Phase 0 — Baseline and environment

**Goal:** establish what you can already do without solution-level AI.

Topics:
- PHP installation, CLI, version, configuration, and extensions.
- Running a script and using the built-in development server.
- Reading PHP errors and using basic debugging.
- Existing code inspection, terminal, Git, and editor setup.

Evidence:
- Complete the diagnostic.
- Explain how a PHP file is executed in CLI versus a web request.
- Run a small script independently and diagnose one intentional error.

Gate: a documented baseline by skill, not a generic "beginner/intermediate" label.

## Phase 1 — Language foundations

Topics:
- PHP opening tags, statements, comments, variables, constants.
- Scalar, compound, special, and nullable types.
- Type declarations, coercion, strict typing, union/intersection types.
- Operators, comparisons, truthiness, null coalescing, nullsafe operator.
- Control flow, loops, match, expressions, and exceptions basics.

Evidence:
- Predict tricky expressions before running them.
- Implement small functions with parameter and return types.
- Explain loose versus strict comparison and common coercion hazards.

Gate: independently write and debug a small typed program.

## Phase 2 — Data, functions, and program composition

Topics:
- Indexed, associative, and multidimensional arrays.
- Array operators and common array functions.
- String handling, Unicode considerations, formatting.
- Function declarations, named arguments, defaults, variadics.
- Scope, closures, arrow functions, references, callbacks.
- Iteration, generators, iterables, and basic SPL.

Evidence:
- Transform nested data without copying a tutorial.
- Design functions with explicit inputs/outputs and useful exceptions.
- Explain mutability, references, and closure capture.

Gate: build a reusable data-processing component and test edge cases.

## Phase 3 — Object-oriented PHP and type design

Topics:
- Classes, objects, properties, methods, constructors.
- Visibility, encapsulation, inheritance, composition.
- Interfaces, abstract classes, traits, enums.
- Readonly properties/classes, static members, final.
- Constructor property promotion.
- Namespaces, imports, autoloading, PSR-4.
- Dependency injection and object collaboration.
- Value objects and domain modeling.

Evidence:
- Model a domain with composition and explicit contracts.
- Explain why an interface or abstraction exists.
- Refactor a tightly coupled design and test the result.

Gate: independently design a small object-oriented subsystem with meaningful tests.

## Phase 4 — PHP ecosystem and developer tooling

Topics:
- Composer dependency management and lock files.
- PSR-4 autoloading and package structure.
- PHP documentation, semantic version constraints, and dependency review.
- PHPUnit, test doubles, fixtures, and integration tests.
- PHPStan or Psalm for static analysis.
- PHP-CS-Fixer or PHP_CodeSniffer for style.
- Xdebug, stack traces, logs, and profiling.
- Git workflows, code review, and reproducible development.

Evidence:
- Create a Composer-managed project.
- Add tests for behavior and failures.
- Diagnose a failing test and a static-analysis issue.

Gate: a reproducible project setup with tests and static checks.

## Phase 5 — HTTP and web fundamentals in PHP

Topics:
- Request/response lifecycle, SAPI, PHP built-in server, PHP-FPM.
- Superglobals and request input.
- GET, POST, headers, status codes, redirects.
- Forms, validation, escaping, and templates.
- Cookies, sessions, authentication concepts.
- Routing, middleware concepts, file uploads.
- JSON, serialization, and HTTP APIs.

Evidence:
- Build a small web application without a full framework.
- Explain request data sources and output escaping.
- Handle validation and failure states safely.

Gate: a small server-rendered web app with clear request handling and tests.

## Phase 6 — Databases and persistence

Topics:
- Relational modeling, keys, constraints, joins, indexes.
- SQL fundamentals and query planning concepts.
- PDO, prepared statements, parameter binding.
- Transactions, isolation basics, concurrency, atomicity.
- Migrations and schema evolution.
- Repository/data-access boundaries.
- Connection configuration and environment variables.

Evidence:
- Design a small schema from requirements.
- Implement CRUD with PDO and prepared statements.
- Demonstrate transaction rollback and test duplicate/invalid cases.

Gate: a data-backed project with safe persistence and integration tests.

## Phase 7 — Secure PHP application engineering

Topics:
- SQL injection, XSS, CSRF.
- Password hashing and verification.
- Authentication versus authorization.
- Session fixation and secure cookie flags.
- Input validation versus output encoding.
- File upload validation and storage boundaries.
- Secrets management, error disclosure, logging, rate limiting.
- Dependency and configuration hygiene.
- Access control and multi-tenant data isolation.

Evidence:
- Identify vulnerabilities in intentionally flawed examples.
- Implement defensive controls and regression tests.
- Explain threat assumptions and residual risks.

Gate: security review of a project with evidence for key controls.

## Phase 8 — Architecture and maintainable application design

Topics:
- Separation of concerns and modularity.
- MVC and request lifecycle.
- Service layers, repositories, dependency injection.
- SOLID principles with practical trade-offs.
- Domain modeling and bounded contexts.
- Events, queues, caching, background work.
- API design, pagination, filtering, and idempotency.
- Logging, observability, configuration, and deployment.

Evidence:
- Evolve a simple application without uncontrolled coupling.
- Defend architecture choices and explain alternatives.
- Test modules independently and across boundaries.

Gate: an independently designed and maintained application slice.

## Phase 9 — Advanced PHP

Topics:
- Closures, first-class callables, generators, iterators.
- Attributes and reflection.
- Fibers and cooperative concurrency concepts.
- Streams and stream contexts.
- SPL and custom iterators.
- Magic methods and serialization pitfalls.
- Advanced type system: covariance, contravariance, intersection types.
- Error model, exception design, shutdown behavior.
- Memory management, references, copy-on-write.
- OPcache, profiling, performance measurement.
- Extensions and high-level PHP internals literacy.

Evidence:
- Explain when an advanced feature is useful and when it is unnecessary.
- Implement a bounded advanced exercise.
- Profile before optimizing and justify a measured change.

Gate: transfer tasks that require selecting an appropriate advanced feature.

## Phase 10 — Framework literacy and professional PHP

Only after core PHP foundations are sufficiently strong, study a framework such as Laravel or Symfony.

Topics:
- Container and dependency injection.
- Routing, middleware, controllers, validation.
- ORM and query builder behavior.
- Authentication, authorization, policies.
- Events, queues, jobs, caching, scheduling.
- Configuration, testing, deployment, and framework security.
- Framework conventions versus underlying PHP behavior.

Evidence:
- Explain what the framework does for you and what PHP concepts it relies on.
- Trace a request through framework internals.
- Implement a feature, then reproduce a small part without the framework.

Gate: deliver a maintainable framework-based application without treating framework knowledge as equivalent to complete PHP mastery.

## Parallel project progression

See [the Projects track](../projects/README.md). Projects are selected to force the current concepts into use. Do not start every project at once.

## Mastery gates

Use M0–M4:
- M0 Unknown.
- M1 Awareness.
- M2 Guided Application.
- M3 Independent Application.
- M4 Transfer & Mastery.

The next module depends on evidence. A project being complete does not automatically promote all its concepts. Revisit earlier concepts when a later project exposes gaps.
