<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBidsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'bid_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'auction_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'bid_price' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NULL',
            'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NULL',
            'deleted_at TIMESTAMP NULL',
        ]);

        // primary key
        $this->forge->addKey('bid_id', TRUE);

        $this->forge->addKey('user_id', FALSE);

        $this->forge->addKey('auction_id', FALSE);

        $this->forge->createTable('bids', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('bids');
    }
}
