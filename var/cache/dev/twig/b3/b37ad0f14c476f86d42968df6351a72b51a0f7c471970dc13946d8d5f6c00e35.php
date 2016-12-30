<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5f3550aca143105f447befd0b25cd580290f6dcaf07d20e175dee78cd78fb0d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48bb02fa1d5a76102cffd12592dc93765a86473c4d4d03eac2b2b30269912888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48bb02fa1d5a76102cffd12592dc93765a86473c4d4d03eac2b2b30269912888->enter($__internal_48bb02fa1d5a76102cffd12592dc93765a86473c4d4d03eac2b2b30269912888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9aab7560f60be56347b5fe1a4ebaa214fc496449d1626c900deef708e818a434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aab7560f60be56347b5fe1a4ebaa214fc496449d1626c900deef708e818a434->enter($__internal_9aab7560f60be56347b5fe1a4ebaa214fc496449d1626c900deef708e818a434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_48bb02fa1d5a76102cffd12592dc93765a86473c4d4d03eac2b2b30269912888->leave($__internal_48bb02fa1d5a76102cffd12592dc93765a86473c4d4d03eac2b2b30269912888_prof);

        
        $__internal_9aab7560f60be56347b5fe1a4ebaa214fc496449d1626c900deef708e818a434->leave($__internal_9aab7560f60be56347b5fe1a4ebaa214fc496449d1626c900deef708e818a434_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1ff8c942a9ce97312bda536b418b4cd9d2264b40407735e33128ecd61996a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ff8c942a9ce97312bda536b418b4cd9d2264b40407735e33128ecd61996a42->enter($__internal_a1ff8c942a9ce97312bda536b418b4cd9d2264b40407735e33128ecd61996a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3dd355800529391b7febad0d8ad6532aa7a1484bd7d6389875671c6ac2d115cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd355800529391b7febad0d8ad6532aa7a1484bd7d6389875671c6ac2d115cb->enter($__internal_3dd355800529391b7febad0d8ad6532aa7a1484bd7d6389875671c6ac2d115cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3dd355800529391b7febad0d8ad6532aa7a1484bd7d6389875671c6ac2d115cb->leave($__internal_3dd355800529391b7febad0d8ad6532aa7a1484bd7d6389875671c6ac2d115cb_prof);

        
        $__internal_a1ff8c942a9ce97312bda536b418b4cd9d2264b40407735e33128ecd61996a42->leave($__internal_a1ff8c942a9ce97312bda536b418b4cd9d2264b40407735e33128ecd61996a42_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
