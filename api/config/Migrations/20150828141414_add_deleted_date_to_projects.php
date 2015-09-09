<?php
use Phinx\Migration\AbstractMigration;

class AddDeletedDateToProjects extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('projects');
        $table->addColumn('deleted_date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
