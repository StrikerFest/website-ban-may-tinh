<script>
    // jQuery(document).ready(function() {
    //     jQuery('#ajaxSubmit').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBSoLuongVGA: jQuery('#PCBSoLuongVGA').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 jQuery('.alert').show();
    //                 jQuery('.alert').html(result.success);
    //             }
    //         });
    //     });
    // });

    // Load lại trang
    function reloadPCBDelete(url) {
        $('#PCBCPU').load(location.href + " #PCBCPU");
        $('#PCBBMC').load(location.href + " #PCBBMC");
        $('#PCBRAM').load(location.href + " #PCBRAM");
        $('#PCBHDD').load(location.href + " #PCBHDD");
        $('#PCBSSD').load(location.href + " #PCBSSD");
        $('#PCBVGA').load(location.href + " #PCBVGA");
        $('#PCBPSU').load(location.href + " #PCBPSU");
        $('#PCBCase').load(location.href + " #PCBCase");
        $('#PCBMH').load(location.href + " #PCBMH");
        $('#PCBMouse').load(location.href + " #PCBMouse");
        $('#PCBBP').load(location.href + " #PCBBP");
        $('#PCBFan').load(location.href + " #PCBFan");
        $('#PCBTNK').load(location.href + " #PCBTNK");
        $('#PCBTNN').load(location.href + " #PCBTNN");
        $('#PCBL').load(location.href + " #PCBL");
    }

    function reloadPCBTotalMoney(url) {
        $('#PCBTongTienCPU').load(location.href + " #PCBTongTienCPU");
        $('#PCBTongTienBMC').load(location.href + " #PCBTongTienBMC");
        $('#PCBTongTienRAM').load(location.href + " #PCBTongTienRAM");
        $('#PCBTongTienHDD').load(location.href + " #PCBTongTienHDD");
        $('#PCBTongTienSSD').load(location.href + " #PCBTongTienSSD");
        $('#PCBTongTienVGA').load(location.href + " #PCBTongTienVGA");
        $('#PCBTongTienPSU').load(location.href + " #PCBTongTienPSU");
        $('#PCBTongTienCase').load(location.href + " #PCBTongTienCase");
        $('#PCBTongTienMH').load(location.href + " #PCBTongTienMH");
        $('#PCBTongTienMouse').load(location.href + " #PCBTongTienMouse");
        $('#PCBTongTienBP').load(location.href + " #PCBTongTienBP");
        $('#PCBTongTienFan').load(location.href + " #PCBTongTienFan");
        $('#PCBTongTienTNK').load(location.href + " #PCBTongTienTNK");
        $('#PCBTongTienTNN').load(location.href + " #PCBTongTienTNN");
        $('#PCBTongTienL').load(location.href + " #PCBTongTienL");
    }

    function reloadPCBCart(url) {
        $('#PCBCart').load(location.href + " #PCBCart");
    }

    // AJAX Delete
    jQuery(document).ready(function() {
        // jQuery('#PCBDeleteL', '#PCBDeleteCPU', '#PCBDeleteBMC', '#PCBDeleteRAM',
        //     '#PCBDeleteHDD', '#PCBDeleteSSD', '#PCBDeleteVGA', '#PCBDeletePSU', '#PCBDeleteCase',
        //     '#PCBDeleteMH', '#PCBDeleteMouse', '#PCBDeleteBP', '#PCBDeleteFan', '#PCBDeleteTNK',
        //     '#PCBDeleteTNN').click(function(e) {
        //     e.preventDefault();
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //         }
        //     });
        //     jQuery.ajax({
        //         url: "{{ route('PCBuilderCustomer.store') }}",
        //         method: 'post',
        //         data: {
        //             PCBDeleteCPU: jQuery('#PCBDeleteCPU').val(),
        //             PCBDeleteBMC: jQuery('#PCBDeleteBMC').val(),
        //             PCBDeleteRAM: jQuery('#PCBDeleteRAM').val(),
        //             PCBDeleteHDD: jQuery('#PCBDeleteHDD').val(),
        //             PCBDeleteSSD: jQuery('#PCBDeleteSSD').val(),
        //             PCBDeleteVGA: jQuery('#PCBDeleteVGA').val(),
        //             PCBDeletePSU: jQuery('#PCBDeletePSU').val(),
        //             PCBDeleteCase: jQuery('#PCBDeleteCase').val(),
        //             PCBDeleteMH: jQuery('#PCBDeleteMH').val(),
        //             PCBDeleteMouse: jQuery('#PCBDeleteMouse').val(),
        //             PCBDeleteBP: jQuery('#PCBDeleteBP').val(),
        //             PCBDeleteFan: jQuery('#PCBDeleteFan').val(),
        //             PCBDeleteTNK: jQuery('#PCBDeleteTNK').val(),
        //             PCBDeleteTNN: jQuery('#PCBDeleteTNN').val(),
        //             PCBDeleteL: jQuery('#PCBDeleteL').val(),
        //         },
        //         success: function(result) {
        //             console.log("Result::" + result);
        //             reloadPCBDelete();
        //         }
        //     });
        // });

        // CPU
        jQuery('#PCBDeleteCPU').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteCPU: jQuery('#PCBDeleteCPU').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBCPU').load(location.href + " #PCBCPU");
                }
            });
        });
        // BMC
        jQuery('#PCBDeleteBMC').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteBMC: jQuery('#PCBDeleteBMC').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBBMC').load(location.href + " #PCBBMC");
                }
            });
        });
        // RAM
        jQuery('#PCBDeleteRAM').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteRAM: jQuery('#PCBDeleteRAM').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBRAM').load(location.href + " #PCBRAM");
                }
            });
        });
        // HDD
        jQuery('#PCBDeleteHDD').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteHDD: jQuery('#PCBDeleteHDD').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBHDD').load(location.href + " #PCBHDD");
                }
            });
        });
        // SSD
        jQuery('#PCBDeleteSSD').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteSSD: jQuery('#PCBDeleteSSD').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBSSD').load(location.href + " #PCBSSD");
                }
            });
        });
        // VGA
        jQuery('#PCBDeleteVGA').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteVGA: jQuery('#PCBDeleteVGA').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBVGA').load(location.href + " #PCBVGA");
                }
            });
        });
        // PSU
        jQuery('#PCBDeletePSU').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeletePSU: jQuery('#PCBDeletePSU').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBPSU').load(location.href + " #PCBPSU");
                }
            });
        });
        // Case
        jQuery('#PCBDeleteCase').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteCase: jQuery('#PCBDeleteCase').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBCase').load(location.href + " #PCBCase");
                }
            });
        });
        // MH
        jQuery('#PCBDeleteMH').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteMH: jQuery('#PCBDeleteMH').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBMH').load(location.href + " #PCBMH");
                }
            });
        });
        // Mouse
        jQuery('#PCBDeleteMouse').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteMouse: jQuery('#PCBDeleteMouse').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBMouse').load(location.href + " #PCBMouse");
                }
            });
        });
        // BP
        jQuery('#PCBDeleteBP').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteBP: jQuery('#PCBDeleteBP').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBBP').load(location.href + " #PCBBP");
                }
            });
        });
        // Fan
        jQuery('#PCBDeleteFan').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteFan: jQuery('#PCBDeleteFan').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBFan').load(location.href + " #PCBFan");
                }
            });
        });
        // TNK
        jQuery('#PCBDeleteTNK').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteTNK: jQuery('#PCBDeleteTNK').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBTNK').load(location.href + " #PCBTNK");
                }
            });
        });
        // TNN
        jQuery('#PCBDeleteTNN').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('PCBuilderCustomer.store') }}",
                method: 'post',
                data: {
                    PCBDeleteTNN: jQuery('#PCBDeleteTNN').val(),
                },
                success: function(result) {
                    console.log("Result::" + result);
                    $('#PCBTNN').load(location.href + " #PCBTNN");
                }
            });
        });
    });

    // AJAX gọi data modal
    // jQuery(document).ready(function() {
    //     // Bộ vi xử lý
    //     jQuery('#PCBDeleteCPU').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteCPU: jQuery('#PCBDeleteCPU').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // BMC
    //     jQuery('#PCBDeleteBMC').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteBMC: jQuery('#PCBDeleteBMC').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // RAM
    //     jQuery('#PCBDeleteRAM').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteRAM: jQuery('#PCBDeleteRAM').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // HDD
    //     jQuery('#PCBDeleteHDD').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteHDD: jQuery('#PCBDeleteHDD').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // SSD
    //     jQuery('#PCBDeleteSSD').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteSSD: jQuery('#PCBDeleteSSD').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // VGA
    //     jQuery('#PCBDeleteVGA').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteVGA: jQuery('#PCBDeleteVGA').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // PSU
    //     jQuery('#PCBDeletePSU').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeletePSU: jQuery('#PCBDeletePSU').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // Case
    //     jQuery('#PCBDeleteCase').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteCase: jQuery('#PCBDeleteCase').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // MH
    //     jQuery('#PCBDeleteMH').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteMH: jQuery('#PCBDeleteMH').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // Mouse
    //     jQuery('#PCBDeleteMouse').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteMouse: jQuery('#PCBDeleteMouse').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // BP
    //     jQuery('#PCBDeleteBP').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteBP: jQuery('#PCBDeleteBP').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // Fan
    //     jQuery('#PCBDeleteFan').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteFan: jQuery('#PCBDeleteFan').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // TNK
    //     jQuery('#PCBDeleteTNK').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteTNK: jQuery('#PCBDeleteTNK').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // TNN
    //     jQuery('#PCBDeleteTNN').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteTNN: jQuery('#PCBDeleteTNN').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    //     // Khác
    //     jQuery('#PCBDeleteL').click(function(e) {
    //         e.preventDefault();
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //             }
    //         });
    //         jQuery.ajax({
    //             url: "{{ route('PCBuilderCustomer.store') }}",
    //             method: 'post',
    //             data: {
    //                 PCBDeleteL: jQuery('#PCBDeleteL').val(),
    //             },
    //             success: function(result) {
    //                 console.log("Result::" + result);
    //                 reloadPCBDelete();
    //             }
    //         });
    //     });
    // });



    // Kiểm tra số lượng

    // CPU
    var PCBSoLuongCPU = document.getElementById("PCBSoLuongCPU");
    PCBSoLuongCPU.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongCPU: jQuery('#PCBSoLuongCPU').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });

    // BMC
    var PCBSoLuongBMC = document.getElementById("PCBSoLuongBMC");
    PCBSoLuongBMC.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongBMC: jQuery('#PCBSoLuongBMC').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // RAM
    var PCBSoLuongRAM = document.getElementById("PCBSoLuongRAM");
    PCBSoLuongRAM.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongRAM: jQuery('#PCBSoLuongRAM').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // HDD
    var PCBSoLuongHDD = document.getElementById("PCBSoLuongHDD");
    PCBSoLuongHDD.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongHDD: jQuery('#PCBSoLuongHDD').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // SSD
    var PCBSoLuongSSD = document.getElementById("PCBSoLuongSSD");
    PCBSoLuongSSD.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongSSD: jQuery('#PCBSoLuongSSD').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // VGA
    var PCBSoLuongVGA = document.getElementById("PCBSoLuongVGA");
    PCBSoLuongVGA.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongVGA: jQuery('#PCBSoLuongVGA').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // PSU
    var PCBSoLuongPSU = document.getElementById("PCBSoLuongPSU");
    PCBSoLuongPSU.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongPSU: jQuery('#PCBSoLuongPSU').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // Case
    var PCBSoLuongCase = document.getElementById("PCBSoLuongCase");
    PCBSoLuongCase.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongCase: jQuery('#PCBSoLuongCase').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // MH
    var PCBSoLuongMH = document.getElementById("PCBSoLuongMH");
    PCBSoLuongMH.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongMH: jQuery('#PCBSoLuongMH').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // Mouse
    var PCBSoLuongMouse = document.getElementById("PCBSoLuongMouse");
    PCBSoLuongMouse.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongMouse: jQuery('#PCBSoLuongMouse').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // BP
    var PCBSoLuongBP = document.getElementById("PCBSoLuongBP");
    PCBSoLuongBP.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongBP: jQuery('#PCBSoLuongBP').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // Fan
    var PCBSoLuongFan = document.getElementById("PCBSoLuongFan");
    PCBSoLuongFan.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongFan: jQuery('#PCBSoLuongFan').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // TNK
    var PCBSoLuongTNK = document.getElementById("PCBSoLuongTNK");
    PCBSoLuongTNK.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongTNK: jQuery('#PCBSoLuongTNK').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
    // TNN
    var PCBSoLuongTNN = document.getElementById("PCBSoLuongTNN");
    PCBSoLuongTNN.addEventListener("keyup", function(e) {
        console.log("HERE");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongTNN: jQuery('#PCBSoLuongTNN').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });

    // L
    var PCBSoLuongL = document.getElementById("PCBSoLuongL");
    PCBSoLuongL.addEventListener("keyup", function(e) {
        console.log("HERE2");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('PCBuilderCustomer.store') }}',
            data: {
                PCBSoLuongL: jQuery('#PCBSoLuongL').val(),
            },
            success: function(result) {
                reloadPCBTotalMoney();
                reloadPCBCart();
            }
        });
    });
</script>
