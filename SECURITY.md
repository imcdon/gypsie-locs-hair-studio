# Security checklist (before every push)

- [ ] No plaintext passwords, API keys, or `.env` files staged
- [ ] No client PII dumps in the repo
- [ ] Booking links only point to the official GlossGenius URL in `includes/config.php`
- [ ] Review `git status` and `git diff --cached` before commit
- [ ] Do not commit `_raw/` photo dumps with private client data

Contact Webstar if credentials were ever committed; rotate them out-of-band.
