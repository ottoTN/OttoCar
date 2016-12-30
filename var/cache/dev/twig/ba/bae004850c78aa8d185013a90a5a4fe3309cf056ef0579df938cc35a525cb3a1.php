<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_513ae2fbdac8aa98de4988305276af7c665d746e39ff2c12990bd643f210ee5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_027b3aeaa3676f034243a96f26486de6dcdae606787e61aecc8a4ad1ff23211e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027b3aeaa3676f034243a96f26486de6dcdae606787e61aecc8a4ad1ff23211e->enter($__internal_027b3aeaa3676f034243a96f26486de6dcdae606787e61aecc8a4ad1ff23211e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4b8b76a235bd55b48054ad95c16609cee9bbe7dc55ae145ae10f9c296a93ce90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8b76a235bd55b48054ad95c16609cee9bbe7dc55ae145ae10f9c296a93ce90->enter($__internal_4b8b76a235bd55b48054ad95c16609cee9bbe7dc55ae145ae10f9c296a93ce90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_027b3aeaa3676f034243a96f26486de6dcdae606787e61aecc8a4ad1ff23211e->leave($__internal_027b3aeaa3676f034243a96f26486de6dcdae606787e61aecc8a4ad1ff23211e_prof);

        
        $__internal_4b8b76a235bd55b48054ad95c16609cee9bbe7dc55ae145ae10f9c296a93ce90->leave($__internal_4b8b76a235bd55b48054ad95c16609cee9bbe7dc55ae145ae10f9c296a93ce90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
