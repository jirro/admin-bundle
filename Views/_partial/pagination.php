<div class="text-center">
    <ul class="pagination">
        <?php if ($paginator->hasPreviousPage()): ?>
            <li>
                <a href="?page=1" aria-label="First">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li>
                <a href="?page=<?php print $paginator->getPreviousPage(); ?>" aria-label="Previous">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
        <?php else: ?>
            <li class="disabled">
                <a href="#" aria-label="First">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="disabled">
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
        <?php endif; ?>

        <?php $numbers = $paginator->getPaginationNumbers(); ?>
        <?php $i = $numbers['firstNumber']; ?>
        <?php while ($i <= $numbers['lastNumber']): ?>
            <?php if ($i == $paginator->getCurrentPage()): ?>
                <li class="active">
            <?php else: ?>
                <li>
            <?php endif; ?>
                <a href="?page=<?php print $i ?>"><?php print $i; ?></a>
            </li>
            <?php $i++; ?>
        <?php endwhile; ?>

        <?php if ($paginator->hasNextPage()): ?>
            <li>
                <a href="?page=<?php print $paginator->getNextPage(); ?>" aria-label="Next">
                    <span aria-hidden="true">&rsaquo;</span>
                </a>
            </li>
            <li>
                <a href="?page=<?php print $paginator->getTotalPages(); ?>" aria-label="Last">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php else: ?>
            <li class="disabled">
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&rsaquo;</span>
                </a>
            </li>
            <li class="disabled">
                <a href="#" aria-label="Last">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</div>
