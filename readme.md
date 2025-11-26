# WordPress Models & Entities

Modern object-oriented models for WordPress development with type safety and IDE support.

## Features

- 🏗️ **Type-safe models** for WordPress database tables
- 🎯 **IDE support** with autocompletion and type hints
- 🔧 **Object-oriented** approach to WordPress data
- 📦 **PSR-4 autoloading** compliant
- 🚀 **PHP 8.1+** features support
- 📝 **Well-documented** with proper interfaces

## Installation

```bash
composer require vigihdev/wp-models
```

## Quick Start

```php
use Vigihdev\WpModels\Entities\Taxonomy;
use Vigihdev\WpModels\Repositories\TaxonomyRepository;

// Get taxonomy by ID
$repository = new TaxonomyRepository();
$taxonomy = $repository->find(1);

if ($taxonomy) {
    echo $taxonomy->getTaxonomy(); // 'category'
    echo $taxonomy->getDescription(); // 'Category description'
    echo $taxonomy->getCount(); // 5
}
```

## Available Models

- **Taxonomy** - WordPress taxonomy terms
- **Post** - WordPress posts (coming soon)
- **User** - WordPress users (coming soon)
- **Comment** - WordPress comments (coming soon)

## Structure

```
src/
├── Contracts/     # Interfaces
├── Entities/      # Model implementations
├── Repositories/  # Data access layer
└── Traits/        # Reusable functionality
```

## Requirements

- PHP 8.1 or higher
- WordPress 5.0 or higher
- Composer

## License

MIT License - see [LICENSE](LICENSE) file for details.

## Contributing

1. Fork the project
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Open a Pull Request

## Support

- Issues: [GitHub Issues](https://github.com/vigihdev/wp-models/issues)
- Email: vigihdev@gmail.com
