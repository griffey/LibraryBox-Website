module Liquid
  # Capture stores the result of a block into a variable without rendering it inplace.
  #
  #   {% capture heading %}
  #     Monkeys!
  #   {% endcapture %}
  #   ...
  #   <h1>{{ heading }}</h1>
  #
  # Capture is useful for saving content for use later in your template, such as
  # in a sidebar or footer.
  #
  class Capture < Block
    def initialize(tag_name, markup, options)
      super
      if markup =~ Syntax
        @to = VariableLookup.parse($1)
      else
        raise SyntaxError.new(options[:locale].t("errors.syntax.capture"))
      end
    end

    def render(context)
      output = super
      if @to.lookups.empty?
        object = context.scopes.last
        key = @to.name
      else
        key = context.evaluate(@to.lookups.pop)
        object = @to.evaluate(context)
      end
      object[key] = output
      context.increment_used_resources(:assign_score_current, output)
      ''.freeze
    end

    def blank?
      true
    end
  end

  Template.register_tag('capture'.freeze, Capture)
end
