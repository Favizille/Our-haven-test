# 🍽️ Take-Home Assignment – Implement "Create Meal" Mutation (Laravel + GraphQL)

### 🧠 Objective

Build a `createMeal` GraphQL mutation for the `ourHavenAPI` Laravel backend using our architectural approach: **GraphQL → Resolver → Facade → Service → Eloquent Model**, with input validation and event-based notification.

This task tests your ability to work with Laravel, GraphQL via Lighthouse, and service-oriented design.

---

## 📦 Tools & Stack

This project uses:

* **Laravel** (PHP framework)
* **Lighthouse** (GraphQL server for Laravel)
  👉 [Lighthouse Docs – Installation](https://lighthouse-php.com/6/getting-started/installation.html)
* **Eloquent ORM**
* **Laravel Events & Listeners**
* **GraphQL-first API** (no REST endpoints)

> You’ll be working entirely through the GraphQL layer.

---

## 🧩 Task Scope

### ✅ What You’ll Implement:

1. **GraphQL Mutation**
   Add a `createMeal` mutation that accepts required fields and returns the created meal.

2. **Input Validation**
   Use Lighthouse’s custom validator feature to enforce rules (e.g. required fields, value ranges, etc.).

3. **Mutation Resolver**
   Implement a class-based resolver that accepts input and passes it to a Facade.

4. **Business Logic Layer**
   Route logic through a Facade to a Service that handles model creation.

5. **Model Interaction**
   Create and persist a new Meal record using Laravel’s Eloquent model.

6. **Event Handling**
   After creation, fire a Laravel event to signal that a meal was created. Optionally, implement a listener for further side effects (e.g., notification or logging).

---

## 🗃️ Assumed Database Schema

You’ll be working with a `meals` table. Assume the following structure:

| Field        | Type      | Notes                    |
| ------------ | --------- | ------------------------ |
| id           | UUID/Int  | Primary key              |
| name         | String    | Required                 |
| description  | Text      | Optional                 |
| price        | Decimal   | Required, positive value |
| category\_id | UUID/Int  | Foreign key (optional)   |
| created\_at  | Timestamp | Auto-managed by Laravel  |
| updated\_at  | Timestamp | Auto-managed by Laravel  |

You can include related models like `MealCategory` if needed.

---

## 🔁 Flow Summary

1. **Client Mutation Call**: Sends a GraphQL mutation with input
2. **Resolver**: Handles input and invokes the Facade
3. **Facade**: Delegates to a Service
4. **Service**: Handles validation, creation, and fires an event
5. **Eloquent Model**: Saves the meal in the database
6. **Event**: Signals that a new meal was created

---

## 🧪 Bonus Points

* Add a feature test to confirm mutation behavior
* Implement a listener that logs or sends an email on meal creation
* Use database seeding to simulate sample data

---

## 📬 Submission Instructions

1. Clone [ourHaven Test repository](https://github.com/ourHaven/take-home)
2. Create a new branch for your solution
3. Push your changes
4. Make a PR to main branch

---

## 🧾 How We’ll Evaluate

* Proper use of Laravel & Lighthouse features
* Clean architecture: GraphQL → Resolver → Facade → Service → Model
* Adherence to Laravel coding standards
* Modular, readable, and maintainable code
* Correct database interaction and event handling
