<?php
require_once('/home/hosting_users/hananuri07/www/hiddenforsecurity/wordpress/wp-config.php');
require_once('/home/hosting_users/hananuri07/www/hiddenforsecurity/wordpress/wp-includes/wp-db.php');
require_once('/home/hosting_users/hananuri07/www/hiddenforsecurity/wordpress/wp-load.php');
    /* ============================================================================== */
    /* =   PAGE : 결과 처리 PAGE                                                    = */
    /* = -------------------------------------------------------------------------- = */
    /* =   pp_ax_hub.php 파일에서 처리된 결과값을 출력하는 페이지입니다.            = */
    /* = -------------------------------------------------------------------------- = */
    /* =   연동시 오류가 발생하는 경우 아래의 주소로 접속하셔서 확인하시기 바랍니다.= */
    /* =   접속 주소 : http://testpay.kcp.co.kr/pgsample/FAQ/search_error.jsp       = */
    /* = -------------------------------------------------------------------------- = */
    /* =   Copyright (c)  2010.02  KCP Inc.   All Rights Reserved.                  = */
    /* ============================================================================== */
?>
<?
    /* ============================================================================== */
    /* =   지불 결과                                                                = */
    /* = -------------------------------------------------------------------------- = */
    $site_cd          = $_POST[ "site_cd"        ];      // 사이트코드
    $req_tx           = $_POST[ "req_tx"         ];      // 요청 구분(승인/취소)
    $use_pay_method   = $_POST[ "use_pay_method" ];      // 사용 결제 수단
    $bSucc            = $_POST[ "bSucc"          ];      // 업체 DB 정상처리 완료 여부
    /* = -------------------------------------------------------------------------- = */
    $res_cd           = $_POST[ "res_cd"         ];      // 결과코드
    $res_msg          = $_POST[ "res_msg"        ];      // 결과메시지
    $res_msg_bsucc    = "";
    /* = -------------------------------------------------------------------------- = */
    $ordr_idxx        = $_POST[ "ordr_idxx"      ];      // 주문번호
    $tno              = $_POST[ "tno"            ];      // KCP 거래번호
    $good_mny         = $_POST[ "good_mny"       ];      // 결제금액
    $good_name        = $_POST[ "good_name"      ];      // 상품명
    $buyr_name        = $_POST[ "buyr_name"      ];      // 구매자명
    $buyr_tel1        = $_POST[ "buyr_tel1"      ];      // 구매자 전화번호
    $buyr_tel2        = $_POST[ "buyr_tel2"      ];      // 구매자 휴대폰번호
    $buyr_mail        = $_POST[ "buyr_mail"      ];      // 구매자 E-Mail

    // Custom 변수
    $db_good          = $_POST[ "db_good"        ];     // 목도리 주문 수량
    $db_num           = $_POST[ "db_num"         ];     // 목도리 주문 수량
    $db_mny           = $_POST[ "db_mny"         ];     // 목도리 구매 금액
    $db_name          = $_POST[ "db_name"        ];     // 주문자 이름
    $db_addr          = $_POST[ "db_addr"        ];     // 배송지 주소
    $db_phone         = $_POST[ "db_phone"       ];     // 주문자 주민등록번호
    $db_mail          = $_POST[ "db_mail"        ];     // 주문자 주민등록번호

    /* = -------------------------------------------------------------------------- = */
    // 공통
    $pnt_issue        = $_POST[ "pnt_issue"      ];      // 포인트 서비스사
    $app_time         = $_POST[ "app_time"       ];      // 승인시간 (공통)
    /* = -------------------------------------------------------------------------- = */
    // 신용카드
    $card_cd          = $_POST[ "card_cd"        ];      // 카드코드
    $card_name        = $_POST[ "card_name"      ];      // 카드명
    $noinf            = $_POST[ "noinf"          ];      // 무이자 여부
    $quota            = $_POST[ "quota"          ];      // 할부개월
    $app_no           = $_POST[ "app_no"         ];      // 승인번호
    /* = -------------------------------------------------------------------------- = */
    // 계좌이체
    $bank_name        = $_POST[ "bank_name"      ];      // 은행명
    $bank_code        = $_POST[ "bank_code"      ];      // 은행코드
    /* = -------------------------------------------------------------------------- = */
    // 가상계좌
    $bankname         = $_POST[ "bankname"       ];      // 입금할 은행
    $depositor        = $_POST[ "depositor"      ];      // 입금할 계좌 예금주
    $account          = $_POST[ "account"        ];      // 입금할 계좌 번호
    $va_date          = $_POST[ "va_date"        ];      // 가상계좌 입금마감시간
    /* = -------------------------------------------------------------------------- = */
    // 포인트
    $pt_idno          = $_POST[ "pt_idno"        ];      // 결제 및 인증 아이디
    $add_pnt          = $_POST[ "add_pnt"        ];      // 발생 포인트
    $use_pnt          = $_POST[ "use_pnt"        ];      // 사용가능 포인트
    $rsv_pnt          = $_POST[ "rsv_pnt"        ];      // 총 누적 포인트
    $pnt_app_time     = $_POST[ "pnt_app_time"   ];      // 승인시간
    $pnt_app_no       = $_POST[ "pnt_app_no"     ];      // 승인번호
    $pnt_amount       = $_POST[ "pnt_amount"     ];      // 적립금액 or 사용금액
    /* = -------------------------------------------------------------------------- = */
    //상품권
    $tk_van_code      = $_POST[ "tk_van_code"    ];      // 발급사 코드
    $tk_app_no        = $_POST[ "tk_app_no"      ];      // 승인 번호
    /* = -------------------------------------------------------------------------- = */
    //휴대폰
    $commid           = $_POST[ "commid"         ];      // 통신사 코드
    $mobile_no        = $_POST[ "mobile_no"      ];      // 휴대폰 번호
    /* = -------------------------------------------------------------------------- = */
    // 현금영수증
    $cash_yn          = $_POST[ "cash_yn"        ];      //현금영수증 등록 여부
    $cash_authno      = $_POST[ "cash_authno"    ];      //현금영수증 승인 번호
    $cash_tr_code     = $_POST[ "cash_tr_code"   ];      //현금영수증 발행 구분
    $cash_id_info     = $_POST[ "cash_id_info"   ];      //현금영수증 등록 번호
    /* = -------------------------------------------------------------------------- = */
    
    //if (eregi('MSIE', $_SERVER['HTTP_USER_AGENT']))
    //{
/*
        $good_name = iconv("EUC-KR", "UTF-8",$good_name);
        $buyr_name = iconv("EUC-KR", "UTF-8",$buyr_name); 
        $use_pay_method = iconv("EUC-KR", "UTF-8",$use_pay_method);
        $res_msg = iconv("EUC-KR", "UTF-8",$res_msg);
        $card_name = iconv("EUC-KR", "UTF-8",$card_name);
        $bank_name = iconv("EUC-KR", "UTF-8",$bank_name);
        $db_good = iconv("EUC-KR", "UTF-8",$db_good);
        $db_num = iconv("EUC-KR", "UTF-8",$db_num);
        $db_mny = iconv("EUC-KR", "UTF-8",$db_mny);
        $db_name = iconv("EUC-KR", "UTF-8",$db_name);
        $db_addr = iconv("EUC-KR", "UTF-8",$db_addr);
        $db_phone = iconv("EUC-KR", "UTF-8",$db_phone);
        $db_mail = iconv("EUC-KR", "UTF-8",$db_mail);
*/
    //}

        function checkUTF8Encoding($string) {
    $test = mb_check_encoding($string, 'UTF-8');

    if($test)
        return $string;
    else if(!$test)
        return iconv("EUC-KR", "UTF-8",$string);
}
        $good_name = checkUTF8Encoding($good_name);
        $buyr_name = checkUTF8Encoding($buyr_name);
        $use_pay_method = checkUTF8Encoding($use_pay_method);
        $res_msg = checkUTF8Encoding($res_msg);
        $card_name = checkUTF8Encoding($card_name);
        $bank_name = checkUTF8Encoding($bank_name);
        $db_good = checkUTF8Encoding($db_good);
        $db_num = checkUTF8Encoding($db_num);
        $db_mny = checkUTF8Encoding($db_mny);
        $db_name = checkUTF8Encoding($db_name);
        $db_addr = checkUTF8Encoding($db_addr);
        $db_phone = checkUTF8Encoding( $db_phone);
        $db_mail = checkUTF8Encoding($db_mail);



    $req_tx_name = "";

    if( $req_tx == "pay" )
    {
        $req_tx_name = "지불";
    }
    else if( $req_tx == "mod" )
    {
        $req_tx_name = "매입/취소";
    }

    /* ============================================================================== */
    /* =   가맹점 측 DB 처리 실패시 상세 결과 메시지 설정                           = */
    /* = -------------------------------------------------------------------------- = */

    if($req_tx == "pay")
    {
        //업체 DB 처리 실패
        if($bSucc == "false")
        {
            if ($res_cd == "0000")
            {
                $res_msg_bsucc = "결제는 정상적으로 이루어졌지만 업체에서 결제 결과를 처리하는 중 오류가 발생하여 시스템에서 자동으로 취소 요청을 하였습니다. <br> 업체로 문의하여 확인하시기 바랍니다.";
            }
            else
            {
                $res_msg_bsucc = "결제는 정상적으로 이루어졌지만 업체에서 결제 결과를 처리하는 중 오류가 발생하여 시스템에서 자동으로 취소 요청을 하였으나, <br> <b>취소가 실패 되었습니다.</b><br> 업체로 문의하여 확인하시기 바랍니다.";
            }
        }
    }

    /* = -------------------------------------------------------------------------- = */
    /* =   가맹점 측 DB 처리 실패시 상세 결과 메시지 설정 끝                        = */
    /* ============================================================================== */
?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="ko-KR" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>*** KCP [AX-HUB Version] ***</title>
    <link href="css/sample.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        /* 신용카드 영수증 연동 스크립트 */
        function receiptView(tno)
        {
            receiptWin = "https://admin8.kcp.co.kr/assist/bill.BillAction.do?cmd=card_bill&c_trade_no=" + tno;
            window.open(receiptWin , "" , "width=470, height=815");
        }

        /* 현금영수증 연동 스크립트 */
        function receiptView2( site_cd, order_id, bill_yn, auth_no )
        {
            receiptWin2 = "https://admin.kcp.co.kr/Modules/Service/Cash/Cash_Bill_Common_View.jsp";
            receiptWin2 += "?";
            receiptWin2 += "term_id=PGNW" + site_cd + "&";
            receiptWin2 += "orderid=" + order_id + "&";
            receiptWin2 += "bill_yn=" + bill_yn + "&";
            receiptWin2 += "authno=" + auth_no ;

            window.open(receiptWin2 , "" , "width=360, height=645");
        }
    </script>
</head>

<body>
    <div align="center">
        <table width="589" cellspacing="0" cellpadding="0">
            <tr style="height:14px"><td style="background-image:url('./img/boxtop589.gif')"></td></tr>
            <tr>
                <td style="background-image:url('./img/boxbg589.gif') " align="center">
                    <table width="551" cellspacing="0" cellpadding="16">
                        <tr style="height:17px">
                            <td style="background-image:url('./img/ttbg551.gif');border:0px " class="white">
                                <span class="bold big">[결과출력]</span> 결제가 성공적으로 이루어졌습니다.
                            </td>
                        </tr>
                        <tr>
                            <td style="background-image:url('./img/boxbg551.gif');" >
                                목도리 키트를 구매해 주셔서 감사드립니다.
                            </td>
                        </tr>
                        <tr style="height:11px"><td style="background:url('./img/boxbtm551.gif') no-repeat;"></td></tr>
                    </table>

<?
    /* ============================================================================== */
    /* =   결제 결과 코드 및 메시지 출력(결과페이지에 반드시 출력해주시기 바랍니다.)= */
    /* = -------------------------------------------------------------------------- = */
    /* =   결제 정상 : res_cd값이 0000으로 설정됩니다.                              = */
    /* =   결제 실패 : res_cd값이 0000이외의 값으로 설정됩니다.                     = */
    /* = -------------------------------------------------------------------------- = */
?>
                    <table width="85%" align="center" border="0" cellpadding="0" cellspacing="1" class="margin_top_20">
                        <tr><td colspan="2"  class="title">처리 결과(<?=$req_tx_name?>)</td></tr>
                        <!-- 결과 코드 -->
                        <tr><td class="sub_title1">결과코드</td><td class="sub_content1"><?=$res_cd?></td></tr>
                        <!-- 결과 메시지 -->
                        <tr><td class="sub_title1">결과 메세지</td><td class="sub_content1"><?=$res_msg?></td></tr>
<?
    // 처리 페이지(pp_cli_hub.jsp)에서 가맹점 DB처리 작업이 실패한 경우 상세메시지를 출력합니다.
    if( !$res_msg_bsucc == "")
    {
?>
                        <tr><td class="sub_title1">결과 상세 메세지</td><td><?=$res_msg_bsucc?></td></tr>
<?
    }
?>
                    </table>

<?
    /* = -------------------------------------------------------------------------- = */
    /* =   결제 결과 코드 및 메시지 출력 끝                                         = */
    /* ============================================================================== */

    /* ============================================================================== */
    /* =  01. 결제 결과 출력                                                        = */
    /* = -------------------------------------------------------------------------- = */
    if ( $req_tx == "pay" )                           // 거래 구분 : 승인
    {
        /* ============================================================================== */
        /* =  01-1. 업체 DB 처리 정상 (bSucc값이 false가 아닌 경우)                     = */
        /* = -------------------------------------------------------------------------- = */
        if ( $bSucc != "false" )                      // 업체 DB 처리 정상
        {
            /* ============================================================================== */
            /* =  01-1-1. 정상 결제시 결제 결과 출력 (res_cd값이 0000인 경우)               = */
            /* = -------------------------------------------------------------------------- = */
            if ( $res_cd == "0000" )                  // 정상 승인
            {
?>
                <table width="85%" align="center" border="0" cellpadding="0" cellspacing="1" class="margin_top_10">
                    <tr><td colspan="2"  class="title">주 문 정 보</td></tr>
                    <!-- 주문번호 -->
                    <tr><td class="sub_title1">주문번호</td><td class="sub_content1"><?=$ordr_idxx?></td></tr>
                    <!-- KCP 거래번호 -->
                    <tr><td class="sub_title1">KCP 거래번호</td><td class="sub_content1"><?=$tno?></td></tr>
                    <!-- 결제금액 -->
                    <tr><td class="sub_title1">목도리 구매 수량</td><td class="sub_content1"><?=$db_num?>개</td></tr>
                    <tr><td class="sub_title1">결제금액</td><td class="sub_content1"><?=$good_mny?>원</td></tr>
                    <!-- 상품명(good_name) -->
                    <tr><td class="sub_title1">상품명</td><td class="sub_content1"><?=$good_name?></td></tr>
                    <!-- 주문자명 -->
                    <tr><td class="sub_title1">주문자명</td><td class="sub_content1"><?=$buyr_name?></td></tr>
                    <!-- 주문자 전화번호 -->
                    <!--<tr><td class="sub_title1">주문자 전화번호</td><td class="sub_content1"><?=$buyr_tel1?></td></tr>-->
                    <!-- 주문자 휴대폰번호 -->
                    <tr><td class="sub_title1">주문자 휴대폰번호</td><td class="sub_content1"><?=$buyr_tel2?></td></tr>
                    <!-- 주문자 E-mail -->
                    <tr><td class="sub_title1">주문자 E-mail</td><td class="sub_content1"><?=$buyr_mail?></td></tr>
                </table>

<?
                /* ============================================================================== */
                /* =  신용카드 결제결과 출력                                                    = */
                /* = -------------------------------------------------------------------------- = */
                if ( $use_pay_method == "100000000000" )       // 신용카드
                {
?>
                    <table width="85%" align="center" cellpadding="0" cellspacing="0" class="margin_top_10">
                    <tr><td colspan="2"  class="title">신용카드 정보</td></tr>
                    <!-- 결제수단 : 신용카드 -->
                    <tr><td class="sub_title1">결제수단</td><td class="sub_content1">신용카드</td></tr>
                    <!-- 결제 카드 -->
                    <tr><td class="sub_title1">결제카드</td><td class="sub_content1"><?=$card_cd?> / <?=$card_name?></td></tr>
                    <!-- 승인시간 -->
                    <tr><td class="sub_title1">승인시간</td><td class="sub_content1"><?=$app_time?></td></tr>
                    <!-- 승인번호 -->
                    <tr><td class="sub_title1">승인번호</td><td class="sub_content1"><?=$app_no?></td></tr>
                    <!-- 할부개월 -->
                    <tr><td class="sub_title1">할부개월</td><td class="sub_content1"><?=$quota?></td></tr>
                    <!-- 무이자여부 -->
                    <tr><td class="sub_title1">무이자여부</td><td class="sub_content1"><?=$noinf?></td></tr>
<?
                    /* ============================================================================== */
                    /* =  복합결제 (포인트 + 신용카드) 승인 결과 처리                                 = */
                    /* = -------------------------------------------------------------------------- = */
                    if ( $pnt_issue == "SCSK" || $pnt_issue == "SCWB" )
                    {
?>
                        <table width="85%" align="center" cellpadding="0" cellspacing="0" class="margin_top_10">
                        <tr><td colspan="2"  class="title">포인트 정보</td></tr>
                        <!-- 포인트사 -->
                        <tr><td class="sub_title1">포인트사</td><td class="sub_content1"><?=$pnt_issue?></td></tr>
                        <!-- 결제 및 인증 아이디 -->
                        <tr><td class="sub_title1">결제 및 인증 아이디</td><td class="sub_content1"><?=$pt_idno?></td></tr>
                        <!-- 포인트 승인시간 -->
                        <tr><td class="sub_title1">포인트 승인시간</td><td class="sub_content1"><?=$pnt_app_time?></td></tr>
                        <!-- 포인트 승인번호 -->
                        <tr><td class="sub_title1">포인트 승인번호</td><td class="sub_content1"><?=$pnt_app_no?></td></tr>
                        <!-- 적립금액 or 사용금액 -->
                        <tr><td class="sub_title1">적립금액 or 사용금액</td><td class="sub_content1"><?=$pnt_amount?></td></tr>
                        <!-- 발생 포인트 -->
                        <tr><td class="sub_title1">발생 포인트</td><td class="sub_content1"><?=$add_pnt?></td></tr>
                        <!-- 사용가능 포인트 -->
                        <tr><td class="sub_title1">사용가능 포인트</td><td class="sub_content1"><?=$use_pnt?></td></tr>
                        <!-- 적립 포인트 -->
                        <tr><td class="sub_title1">총 누적 포인트</td><td class="sub_content1"><?=$rsv_pnt?></td></tr>
<?
                    }
                    /* ============================================================================== */
                    /* =  신용카드 영수증 출력                                                      = */
                    /* = -------------------------------------------------------------------------- = */
                    /*    실제 거래건에 대해서 영수증을 출력 할 수 있습니다.                        = */
                    /* = -------------------------------------------------------------------------- = */
?>
                    <tr>
                    <td class="sub_title1">영수증 확인</td>
                    <td class="sub_content1"><a href="javascript:receiptView('<?=$tno?>')"><img src="./img/btn_receipt.gif" alt="영수증을 확인합니다." />
                    </td>
                    <tr><td colspan="2">※ 영수증 확인은 실제결제의 경우에만 가능합니다.</td></tr>
                    <tr class="line2"><td colspan="2" bgcolor="#bbcbdb"></td></tr>
                </table>
<?
                }
                /* ============================================================================== */
                /* =   계좌이체 결제 결과 출력                                                  = */
                /* = -------------------------------------------------------------------------- = */
                else if ( $use_pay_method == "010000000000" )       // 계좌이체
                {
?>
                    <table width="85%" align="center" cellpadding="0" cellspacing="0" class="margin_top_10">
                    <tr><td colspan="2"  class="title">계좌이체 정보</td></tr>
                    <!-- 결제수단 : 계좌이체 -->
                    <tr><td class="sub_title1">결제수단</td><td class="sub_content1">계좌이체</td></tr>
                    <!-- 이체은행 -->
                    <tr><td class="sub_title1">이체은행</td><td class="sub_content1"><?=$bank_name?></td></tr>
                    <!-- 은행코드 -->
                    <tr><td class="sub_title1">이체은행코드</td><td class="sub_content1"><?=$bank_code?></td></tr>
                    <!-- 승인시간 -->
                    <tr><td class="sub_title1">승인시간</td><td class="sub_content1"><?=$app_time?></td></tr>
                </table>

<?
                }
                /* ============================================================================== */
                /* =   휴대폰 결제 결과 출력                                                  = */
                /* = -------------------------------------------------------------------------- = */
                else if ( $use_pay_method == "000010000000" )       // 휴대폰
                {
?>
                    <table width="85%" align="center" cellpadding="0" cellspacing="0" class="margin_top_10">
                    <tr><td colspan="2"  class="title">휴대폰 정보</td></tr>
                    <!-- 결제수단 : 휴대폰 -->
                    <tr><td class="sub_title1">결제수단</td><td class="sub_content1">휴대폰</td></tr>
                    <!-- 승인시간 -->
                    <tr><td class="sub_title1">승인시간</td><td class="sub_content1"><?=$app_time?></td></tr>
                    <!-- 통신사코드 -->
                    <tr><td class="sub_title1">통신사코드</td><td class="sub_content1"><?=$commid?></td></tr>
                    <!-- 휴대폰번호 -->
                    <tr><td class="sub_title1">휴대폰번호</td><td class="sub_content1"><?=$mobile_no?></td></tr>
                </table>

<?
                }
                /* ============================================================================== */
                /* =  현금영수증 정보 출력                                                      = */
                /* = -------------------------------------------------------------------------- = */
                if ( $cash_yn != "" )
                {
?>
                <!-- 현금영수증 정보 출력-->
                <table width="85%" cellpadding="0" cellspacing="0" class="margin_top_20">
                    <tr><td colspan="2" class="title">현금영수증 정보</td></tr>
                    <tr><td class="sub_title1">현금영수증 등록여부</td><td class="sub_content1"><?=$cash_yn?></td></tr>
<?
                    // 현금영수증이 등록된 경우 승인번호 값이 존재
                        if ($cash_authno != "")
                        {
?>
                        <tr><td class="sub_title1">현금영수증 승인번호</td><td class="sub_content1"><?=$cash_authno?></td></tr>
                        <tr>
                        <td class="sub_title1">영수증 확인</td>
                        <td class="sub_content1"><a href="javascript:receiptView2('<?=$site_cd?>','<?=$ordr_idxx?>', '<?=$cash_yn?>', '<?=$cash_authno?>')"><img src="./img/btn_receipt.gif" alt="현금영수증을  확인합니다." />
                        </td></tr>
                        <tr><td colspan="2">※ 영수증 확인은 실제결제의 경우에만 가능합니다.</td></tr>
                        <tr class="line2"><td colspan="2" bgcolor="#bbcbdb"></td></tr>
<?

                        }
?>
                </table>
<?
                }
            }
            /* = -------------------------------------------------------------------------- = */
            /* =   01-1-1. 정상 결제시 결제 결과 출력 END                                   = */
            /* ============================================================================== */
        }
        /* = -------------------------------------------------------------------------- = */
        /* =   01-1. 업체 DB 처리 정상 END                                              = */
        /* ============================================================================== */
    }
    /* = -------------------------------------------------------------------------- = */
    /* =   01. 결제 결과 출력 END                                                   = */
    /* ============================================================================== */    


?>

<?

global $wpdb;
$table_name = "muffler_info";


$wpdb->insert($table_name, array( 'good_name' => $db_good,  'muffler_num' => $db_num, 'amount' => $db_mny,
                                'name' => $db_name, 'address' => $db_addr, 'phone' => $db_phone, 'mail' => $db_mail ) );
?>
            
            <table width="85%" align="center" class="margin_top_10">
                    <tr>
                        <td style="text-align:center">
                            <a href="http://www.hananuri.org" class="result_btn"><span>홈페이지</span></a>
                            <!--<a href="http://www.hananuri.org/support/refund" class="result_btn"><span>소득공제 정보입력</span></a>-->
                        </td>
                    </tr>
            </table>
            </td></tr>
            <tr><td><img src="./img/boxbtm589.gif" alt="Copyright(c) KCP Inc. All rights reserved."/></td></tr>
        </table>
    </div>
</html>
