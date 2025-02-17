Jekyll::Hooks.register :site, :post_write do |site|
    puts "Generating PDF file."
    `google-chrome-stable \
        --headless \
        --run-all-compositor-stages-before-draw \
        --virtual-time-budget=3000 \
        --print-to-pdf="_site/#{site.data["sidebar"]["pdfpath"]}" _site/index.html`
end