## Actividad 11: Blade Templating - Theoretical Questions

### 1. Purpose of Directives (@yield, @section, @extends, @show, @parent)
- **`@yield`**: Displays the contents of a given section (acts as a placeholder in master layouts).
- **`@section`**: Defines a section of content or starts a content block.
- **`@extends`**: Inherits a master/parent layout into a child view.
- **`@show`**: Evaluates a section and immediately yields/renders its contents in place.
- **`@parent`**: Allows a child view to append content to the parent layout's existing section content instead of completely overwriting it.

### 2. Other Control Structures in Blade
- **`@unless`**: Renders content if the expression is false (opposite of `@if`).
- **`@isset` / @empty`**: Checks if a variable is set or empty.
- **Loops**: `@for`, `@foreach`, `@foreachelse`, `@while`.

### 3. Frontend Scaffolding
Frontend scaffolding refers to the pre-packaged starter kits and boilerplate code (such as authentication views, Tailwind/Bootstrap setups, or JS framework scaffolding via Laravel Breeze or Jetstream) that accelerate initial project development.
