# click-jacking
demo
# Click-jacking Risk Assessment & Mitigation — Web App (Personal Project)

**Thời gian:** `09/2025 - 11/2025`  
**Vai trò:** Tester / Security QA (Intern)

---

## Mô tả ngắn
Đánh giá rủi ro click-jacking cho ứng dụng web, thực hiện kiểm thử chức năng và kiểm thử bảo mật trình duyệt, đề xuất giải pháp giảm thiểu (mitigation) và PoC an toàn cho môi trường QA.

---

## Công việc chính
- Thiết kế **30 test case manual** & **10 automated tests** để kiểm tra khả năng bị click-jacking (iframe), thực hiện hit-testing và luồng phân quyền (permission flows).  
- **Audit server headers:** kiểm tra/triage `Content-Security-Policy frame-ancestors` và `X-Frame-Options`; đề xuất cấu hình chặn/whitelist.  
- Thực hiện **PoC an toàn** trên môi trường QA (không tấn công production); lập checklist remediation trước & sau cho dev.  
- Soạn tài liệu hướng dẫn remediation và playbook cho dev/ops (CSP policy templates, HTTP header examples).  
- Xây dựng các script tự động kiểm thử (Selenium + Burp Suite) để lặp lại PoC trong pipeline QA.

---

## Công cụ & kỹ thuật
- **Burp Suite** (proxy, repeater)  
- **Selenium** (automation)  
- **Postman** (API testing)  
- **Chrome DevTools** (CSP, header inspection)  
- **OWASP test cases** (CSP / click-jacking checklist)

---

## Kết quả & deliverables
- Bộ **test cases** (manual + automated) — file đính kèm / tests/  
- **PoC** an toàn (HTML sandbox + iframe tests) — scripts trong repo demo/  
- **Remediation checklist** cho dev và policy snippets (CSP + X-Frame)  
- Báo cáo rủi ro và prioritized fixes

---

## Liên hệ / Chi tiết
Nếu cần xem testcases hoặc PoC chi tiết, liên hệ mr daun


---
