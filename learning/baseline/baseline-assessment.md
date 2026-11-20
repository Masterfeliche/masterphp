# PHP Baseline Assessment

**Purpose:** find your actual starting point. You have some PHP basics, so this is diagnostic—not a beginner exam.

## Rules

- Complete this before using solution-generating AI.
- You may use the official PHP manual and PHP CLI. Record when you consult documentation.
- Do not search for the exact exercise or copy a solution.
- Write your reasoning before running code.
- If you cannot answer a question, write what you think and mark your confidence. Uncertainty is useful diagnostic evidence.
- Record elapsed time, documentation used, and assistance level (A0–A4).
- Do not optimize for a perfect score. Honest evidence is more useful.

Suggested time: 75–100 minutes. It is acceptable to split the assessment across two sessions.

## Part A — Explain concepts

Answer in your own words. Include a small example where useful.

1. What happens when you run `php script.php` from a terminal?
2. How is that different from a PHP file serving a browser request?
3. What is the difference between `==` and `===`? Why can loose comparison cause bugs?
4. Explain indexed arrays and associative arrays. Can a PHP array contain both integer and string keys?
5. What does `declare(strict_types=1);` affect? What does it not do?
6. Explain the difference between `include`, `require`, `include_once`, and `require_once`.
7. What is the difference between an exception and an error in PHP? How would you handle a failure?
8. Explain a class, an object, an interface, and a trait. When would composition be preferable to inheritance?
9. What problem do namespaces and Composer autoloading solve?
10. Why should database queries use prepared statements? What does PDO provide?

## Part B — Predict before execution

For each expression, write the result or behavior and explain why. Then run a small script to check your prediction.

- `0 == "0"`
- `0 === "0"`
- `"0" == false`
- `[] === false`
- `null ?? "fallback"`
- `false ?? "fallback"`
- `$value = $missing ?? "default"`
- `array_key_exists("name", $data)` versus `isset($data["name"])` when the key exists with a null value.

Record which predictions were correct and explain any surprises. Consult the manual for behavior that depends on the PHP version.

## Part C — Independent implementation

Create a PHP file under `learning/exercises/submissions/baseline-transaction-summary.php`.

Implement a function:

```php
function summarizeTransactions(array $transactions): array
```

Each transaction is an associative array with:
- `description`: non-empty string.
- `amount_cents`: positive integer.
- `category`: non-empty string.

Return:
- `transaction_count`: number of valid transactions.
- `total_cents`: sum of all amounts.
- `totals_by_category`: total cents grouped by category.

Requirements:
1. Empty input returns a valid summary with zero totals and an empty category map.
2. Repeated categories are aggregated.
3. Do not use floating point for money.
4. Define how malformed records are handled and be consistent.
5. Use clear names and sensible type declarations.
6. Add at least five tests or executable assertions, including empty input, multiple categories, repeated categories, and invalid data.
7. Use strict typing in the file.

Do not ask an agent to write the function. If you become stuck, record the point of difficulty and request a conceptual hint only after making an attempt.

## Part D — Debugging

Inspect and debug this code without immediately asking AI for the fix:

```php
<?php
$prices = [10, 20, 30];

foreach ($prices as &$price) {
    $price = $price * 2;
}

foreach ($prices as $price) {
    echo $price . PHP_EOL;
}
```

1. Predict the output.
2. Explain the underlying behavior.
3. Fix the code safely.
4. Add a small check that would catch the problem.

## Part E — Design and security reasoning

1. A PHP page receives an `id` from `$_GET` and uses it in SQL. What can go wrong? How would you query safely?
2. A form accepts a user's name and later displays it in HTML. What should happen before rendering it?
3. Why is storing a plain-text password unacceptable? Name the PHP functions you would use.
4. What is the difference between authentication and authorization?
5. What is one way to keep database credentials out of source control?

## Part F — Tooling and project experience

Mark each item as:
- Never used.
- Used with guidance.
- Used independently.
- Can explain and debug independently.

Items:
- PHP CLI and built-in development server.
- Composer and autoloading.
- Git branches and commits.
- PDO.
- MySQL or PostgreSQL.
- PHPUnit or another test runner.
- Xdebug or a debugger.
- Static analysis (PHPStan or Psalm).
- Namespaces and interfaces.
- Building a complete PHP application.

## Submission

Create `learning/baseline/baseline-results.md` using the results template. Include:
- Time spent.
- Answers and implementation location.
- Tests and observed output.
- Documentation consulted.
- AI assistance, if any.
- Questions you could not answer.
- Topics that felt easy, uncertain, or difficult.

Do not assign yourself an overall PHP level. The EMW skill ledger is updated by concept after reviewing the evidence.
