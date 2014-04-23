<?php

class userPointerRecordModel extends Basic {

    public function __construct() {

        $this->child_name = 'user_points_record';

        parent::__construct();
    }

    public function addRecord($user_id, $type, $fraction, $source, $id = '') {

        $data['user_id'] = $user_id;


        $data['record_type'] = $type;

        $data['fraction'] = $fraction;

        $data['source'] = $source;

        $data['exchange_id'] = $id;

        $data['create_time'] = time();

        $this->insert($data);


        return $data;
    }

    /**
     * 
     * @param array $userinfo  用户信息
     * @param type $type  类型  1为 获取  2为消费
     * @return 数组
     */
    public function getUserRecord($userinfo, $type) {

        $array = array();

        $this->addCondition('user_id = ' . $userinfo['user_id'], 1);

        $this->addOrderBy('create_time DESC');

        $this->initialize();

        if ($this->vars_number > 0) {

            foreach ($this->vars_all as $k => $v) {

                $money = $v['fraction'];

                $moneyString = $money{0};


                if ($type == 1) {

                    if ($moneyString != '-' && $moneyString != '0') {

                        $data['user_id'] = $v['user_id'];

                        $data['fraction'] = '+' . $money;

                        $data['create_time'] = date('Y-m-d', $v['create_time']);

                        switch ($v['source']) {

                            case 'crm' : $source = '系统';

                                break;

                            case 'exchange': $source = '兑换';

                                break;

                            case 'bigwheel': $source = '大转盘';

                                break;

                            case 'guaguaka': $source = '刮刮卡';

                                break;
                        }

                        $data['source'] = $source;

                        array_push($array, $data);
                    }
                } else if ($type == 2) {
                    
                    if ($moneyString == '-') {

                        $data['user_id'] = $v['user_id'];

                        $data['fraction'] = $money;

                        $data['create_time'] = date('Y-m-d', $v['create_time']);

                        switch ($v['source']) {

                            case 'crm' : $source = '系统';

                                break;

                            case 'exchange': $source = '兑换';

                                break;

                            case 'bigwheel': $source = '大转盘';

                                break;

                            case 'guaguaka': $source = '刮刮卡';

                                break;
                        }

                        $data['source'] = $source;

                        array_push($array, $data);
                    }
                }
            }
        }

        AssemblyJson($array);
    }

}

?>