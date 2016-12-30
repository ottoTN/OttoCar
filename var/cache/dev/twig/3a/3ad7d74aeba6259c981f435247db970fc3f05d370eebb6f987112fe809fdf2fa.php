<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_19a65c2a8ec01f1941b20514e6efb2b8d5a24c1940b38a18c6f987915a8557a6 extends Twig_Template
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
        $__internal_0a52c11b28d7e295249f9183c952f8698f2038c4b8009de5cd6f561fa0cf142e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a52c11b28d7e295249f9183c952f8698f2038c4b8009de5cd6f561fa0cf142e->enter($__internal_0a52c11b28d7e295249f9183c952f8698f2038c4b8009de5cd6f561fa0cf142e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_9be2e2a6aca0e48df05ddafde7e9f839859ccbae5e4d133c798146d486aaa2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be2e2a6aca0e48df05ddafde7e9f839859ccbae5e4d133c798146d486aaa2bb->enter($__internal_9be2e2a6aca0e48df05ddafde7e9f839859ccbae5e4d133c798146d486aaa2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0a52c11b28d7e295249f9183c952f8698f2038c4b8009de5cd6f561fa0cf142e->leave($__internal_0a52c11b28d7e295249f9183c952f8698f2038c4b8009de5cd6f561fa0cf142e_prof);

        
        $__internal_9be2e2a6aca0e48df05ddafde7e9f839859ccbae5e4d133c798146d486aaa2bb->leave($__internal_9be2e2a6aca0e48df05ddafde7e9f839859ccbae5e4d133c798146d486aaa2bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
